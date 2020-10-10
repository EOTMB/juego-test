<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $deportes = DB::table("quizzes")->insert(["name" => "Deportes"]);

        $questionUnoDeportes = DB::table("questions")->insert(
            [
                "body" => "¿Cada cuánto se juega un mundial de fútbol?",
                "quiz_id" => 1
            ]
        );
        $questionDosDeportes = DB::table("questions")->insert(
            [
                "body" => "¿Cuál es el país que mas veces ganó la Copa Davis?",
                "quiz_id" => 1
            ]
        );
        $questionTresDeportes = DB::table("questions")->insert(
            [
                "body" => "¿En qué deporte se destaca Tiger Woods?",
                "quiz_id" => 1
            ]
        );
        $questionCuatroDeportes = DB::table("questions")->insert(
            [
                "body" => "¿Cuál de estos pilotos ganó más campeonatos del mundo en la Fórmula 1?(2020)",
                "quiz_id" => 1
            ]
        );
        $questionCincoDeportes = DB::table("questions")->insert(
            [
                "body" => "¿Cuál de estos jugadores es el máximo goleador de la historia de los mundiales de fútbol (2020)?",
                "quiz_id" => 1
            ]
        );
        //Respuestas a las question de Deportes
        $answerUnoDeportes = DB::table("answers")->insert(
            [
                "answer" => "Cada 4 años",
                "is_correct" => true,
                "question_id" => 1
            ]
        );
        $answerDosDeportes = DB::table("answers")->insert(
            [
                "answer" => "Cada 2 años",
                "is_correct" => false,
                "question_id" => 1
            ]
        );
        $answerTresDeportes = DB::table("answers")->insert(
            [
                "answer" => "Cada 6 años",
                "is_correct" => false,
                "question_id" => 1
            ]
        );
        $answerCuatroDeportes = DB::table("answers")->insert(
            [
                "answer" => "Estados Unidos",
                "is_correct" => true,
                "question_id" => 2
            ]
        );
        $answerCincoDeportes = DB::table("answers")->insert(
            [
                "answer" => "Australia",
                "is_correct" => false,
                "question_id" => 2
            ]
        );
        $questioneisDeportes = DB::table("answers")->insert(
            [
                "answer" => "Francia",
                "is_correct" => false,
                "question_id" => 2
            ]
        );
        $questionieteDeportes = DB::table("answers")->insert(
            [
                "answer" => "Golf",
                "is_correct" => true,
                "question_id" => 3
            ]
        );
        $answerOchoDeportes = DB::table("answers")->insert(
            [
                "answer" => "Basketball",
                "is_correct" => false,
                "question_id" => 3
            ]
        );
        $answerNueveDeportes = DB::table("answers")->insert(
            [
                "answer" => "Tenis",
                "is_correct" => false,
                "question_id" => 3
            ]
        );
        $answerDiezDeportes = DB::table("answers")->insert(
            [
                "answer" => "Michael Schumacher",
                "is_correct" => true,
                "question_id" => 4
            ]
        );
        $answerOnceDeportes = DB::table("answers")->insert(
            [
                "answer" => "Lewis Hamilton",
                "is_correct" => false,
                "question_id" => 4
            ]
        );
        $answerDoceDeportes = DB::table("answers")->insert(
            [
                "answer" => "Juan Manuel Fangio",
                "is_correct" => false,
                "question_id" => 4
            ]
        );
        $answerTreceDeportes = DB::table("answers")->insert(
            [
                "answer" => "Miroslav Klose",
                "is_correct" => true,
                "question_id" => 5
            ]
        );
        $answerCatorceDeportes = DB::table("answers")->insert(
            [
                "answer" => "Ronaldo Nazário",
                "is_correct" => false,
                "question_id" => 5
            ]
        );
        $answerQuinceDeportes = DB::table("answers")->insert(
            [
                "answer" => "Gerd Müller",
                "is_correct" => false,
                "question_id" => 5
            ]
        );
         //$this->call(QuizzSeeder::class);
         //$this->call(QuestionSeeder::class);
         //$this->call(AnswerSeeder::class);
    }
}
