<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Section;
use App\Models\Lesson;
use App\Models\Quiz;
use App\Models\Answer;
use App\Models\Topic;
use Illuminate\Support\Facades\Auth;

class InstructorController extends Controller
{
    public function dashboard($username)
    {
        return view('instructor.dashboard.dashboard');
    }

    public function manage_courses()
    {
        $topics = Topic::all();
        $courses = Course::all();
        return view('instructor.courses.manage-courses', ['courses'=>$courses, 'topics'=>$topics]);
    }

    public function manage_quizzes()
    {
        return view('instructor.quizzes.manage-quizzes');
    }

    public function earning()
    {
        return view('instructor.earnings.earnings');
    }

    public function statement()
    {
        return view('instructor.statement.statement');
    }

    public function edit_course(Request $request)
    {
        $user = Auth::user();
        if ($user === null) {
            return response()->json(['message' => 'User not authenticated', 404]);
        }
        $course = $request->course;
        if ($course['id'] == "new") {
            $newCourse = new Course;
        } else {
            $newCourse = Course::find($course['id']);
            if ($user === null) {
                return response()->json(['message' => 'Không tìm thấy khoá học', 404]);
            }
        }
        $newCourse->name = $course['name'];
        $newCourse->instructor_id = Auth::user()->id;
        $newCourse->introduce = $course['introduce'];
        $newCourse->price = $course['price'];
        $a = $course['topic'];
        $newCourse->save();
        $newCourse->topics()->attach($course['topic']);
        foreach ($course['sections'] as $section) {
            $newSection = new Section;
            $newSection->name = $section['name'];
            $newSection->course()->associate($newCourse);
            $newSection->save();
            foreach ($section['lessons'] as $lesson) {
                $newLesson = new Lesson;
                $newLesson->name = $lesson['name'];
                $newLesson->video_url = $lesson['url'];
                $newLesson->info = $lesson['info'];
                $newLesson->duration = $lesson['duration'];
                $newLesson->section()->associate($newSection);
                $newLesson->save();
            }
            if (array_key_exists('quizzes', $section)) {
                foreach ($section['quizzes'] as $quiz) {
                    $newQuiz = new Quiz;
                    $newQuiz->name = $quiz['name'];
                    $newQuiz->question = $quiz['question'];
                    $newQuiz->save();
                    foreach ($quiz['answer'] as $answer) {
                        $newAnswer = newAnswer;
                        $newAnswer->content = $answer['content'];
                        $newAnswer->is_true = $answer['isAnswer'];
                        $newAnswer->quiz()->associate($newQuiz);
                        $newAnswer->save();
                    }
                    $newQuiz->section()->associate($newSection);
                    $newQuiz->save();
                }
            }
            $newSection->course()->associate($newCourse);
            $newSection->save();
        }
        return view('instructor.courses.edit-courses');
    }

    public function edit_quiz()
    {
        return view('instructor.quizzes.edit-quiz');
    }
}
