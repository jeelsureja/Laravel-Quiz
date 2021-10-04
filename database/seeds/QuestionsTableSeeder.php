<?php

use App\Options;
use App\Question;
use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $question1 = new Question();
      $question1->topic_id = 1;
      $question1->question_text = 'Laravel is based on';
      $question1->save();

      $q1answer1 = new Options();
      $q1answer1->question_id = 1;
      $q1answer1->option = '*MVC Design Pattern';
      $q1answer1->correct = 1;
      $q1answer1->save();

      $q1answer2 = new Options();
      $q1answer2->question_id = 1;
      $q1answer2->option = 'MVVM Design Pattern';
      $q1answer2->save();

      $q1answer3 = new Options();
      $q1answer3->question_id = 1;
      $q1answer3->option = 'Composite Design Pattern';
      $q1answer3->save();

      $question2 = new Question();
      $question2->topic_id = 1;
      $question2->question_text = 'Which one Laravel command line interface?';
      $question2->save();

      $q2answer1 = new Options();
      $q2answer1->question_id = 2;
      $q2answer1->option = 'git';
      $q2answer1->save();

      $q2answer2 = new Options();
      $q2answer2->question_id = 2;
      $q2answer2->option = '*php artisan';
      $q2answer2->correct = 1;
      $q2answer2->save();

      $q2answer3 = new Options();
      $q2answer3->question_id = 2;
      $q2answer3->option = 'CLI';
      $q2answer3->save();

      $question3 = new Question();
      $question3->topic_id = 1;
      $question3->question_text = 'Does Laravel Support Caching?';
      $question3->save();

      $q3answer1 = new Options();
      $q3answer1->question_id = 3;
      $q3answer1->option = '*Yes';
      $q3answer1->correct = 1;
      $q3answer1->save();

      $q3answer2 = new Options();
      $q3answer2->question_id = 3;
      $q3answer2->option = 'No';
      $q3answer2->save();

      $q3answer3 = new Options();
      $q3answer3->question_id = 3;
      $q3answer3->option = 'None';
      $q3answer3->save();

      $question4 = new Question();
      $question4->topic_id = 1;
      $question4->question_text = 'Which command is used to start laravel server?';
      $question4->save();

      $q3answer1 = new Options();
      $q3answer1->question_id = 4;
      $q3answer1->option = 'php artisan start php';
      $q3answer1->save();

      $q3answer2 = new Options();
      $q3answer2->question_id = 4;
      $q3answer2->option = '*php artisan serve';
      $q3answer2->correct = 1;
      $q3answer2->save();

      $q3answer3 = new Options();
      $q3answer3->question_id = 4;
      $q3answer3->option = 'artisan start-server';
      $q3answer3->save();

      $question5 = new Question();
      $question5->topic_id = 1;
      $question5->question_text = 'What is it Blade?';
      $question5->save();

      $q3answer1 = new Options();
      $q3answer1->question_id = 5;
      $q3answer1->option = 'package';
      $q3answer1->save();

      $q3answer2 = new Options();
      $q3answer2->question_id = 5;
      $q3answer2->option = '*Template Engine';
      $q3answer2->correct = 1;
      $q3answer2->save();

      $q3answer3 = new Options();
      $q3answer3->question_id = 5;
      $q3answer3->option = 'framework';
      $q3answer3->save();

      $question6 = new Question();
      $question6->topic_id = 1;
      $question6->question_text = 'Where is routing file located in Laravel?';
      $question6->save();

      $q3answer1 = new Options();
      $q3answer1->question_id = 6;
      $q3answer1->option = 'public/';
      $q3answer1->save();

      $q3answer2 = new Options();
      $q3answer2->question_id = 6;
      $q3answer2->option = 'view/';
      $q3answer2->save();

      $q3answer3 = new Options();
      $q3answer3->question_id = 6;
      $q3answer3->option = '*routes/';
      $q3answer3->correct = 1;
      $q3answer3->save();

      $question7 = new Question();
      $question7->topic_id = 1;
      $question7->question_text = 'What do you mean by dd() function?';
      $question7->save();

      $q3answer1 = new Options();
      $q3answer1->question_id = 7;
      $q3answer1->option = 'The full form of dd is Date and Day.';
      $q3answer1->save();

      $q3answer2 = new Options();
      $q3answer2->question_id = 7;
      $q3answer2->option = 'The full form of dd is Directory and Door.';
      $q3answer2->save();

      $q3answer3 = new Options();
      $q3answer3->question_id = 7;
      $q3answer3->option = '*The full form of dd is Dump and Die.';
      $q3answer3->correct = 1;
      $q3answer3->save();

      $question8 = new Question();
      $question8->topic_id = 1;
      $question8->question_text = 'Laravel is written in __ language';
      $question8->save();

      $q3answer1 = new Options();
      $q3answer1->question_id = 8;
      $q3answer1->option = '*PHP';
      $q3answer1->correct = 1;
      $q3answer1->save();

      $q3answer2 = new Options();
      $q3answer2->question_id = 8;
      $q3answer2->option = 'JSP';
      $q3answer2->save();

      $q3answer3 = new Options();
      $q3answer3->question_id = 8;
      $q3answer3->option = 'ASP';
      $q3answer3->save();

      $question9 = new Question();
      $question9->topic_id = 1;
      $question9->question_text = 'Which directory contains “robot.txt” file?';
      $question9->save();

      $q3answer1 = new Options();
      $q3answer1->question_id = 9;
      $q3answer1->option = 'route';
      $q3answer1->save();

      $q3answer2 = new Options();
      $q3answer2->question_id = 9;
      $q3answer2->option = '*public';
      $q3answer2->correct = 1;
      $q3answer2->save();

      $q3answer3 = new Options();
      $q3answer3->question_id = 9;
      $q3answer3->option = 'view';
      $q3answer3->save();

      $question10 = new Question();
      $question10->topic_id = 1;
      $question10->question_text = 'What is the minimum PHP version required to install Laravel 5.3?';
      $question10->save();

      $q3answer1 = new Options();
      $q3answer1->question_id = 10;
      $q3answer1->option = '5.4.1';
      $q3answer1->save();

      $q3answer2 = new Options();
      $q3answer2->question_id = 10;
      $q3answer2->option = '*5.6.4';
      $q3answer2->correct = 1;
      $q3answer2->save();

      $q3answer3 = new Options();
      $q3answer3->question_id = 10;
      $q3answer3->option = '4.0.0';
      $q3answer3->save();

      $question11 = new Question();
      $question11->topic_id = 2;
      $question11->question_text = 'What is ReactJS?';
      $question11->save();

      $q3answer1 = new Options();
      $q3answer1->question_id = 11;
      $q3answer1->option = 'Server-side Framework';
      $q3answer1->save();

      $q3answer2 = new Options();
      $q3answer2->question_id = 11;
      $q3answer2->option = '*User-interface framework';
      $q3answer2->correct = 1;
      $q3answer2->save();

      $q3answer3 = new Options();
      $q3answer3->question_id = 11;
      $q3answer3->option = 'Both server & Client';
      $q3answer3->save();

      $question12 = new Question();
      $question12->topic_id = 2;
      $question12->question_text = 'What function allows you to render React content in an HTML page?';
      $question12->save();

      $q3answer1 = new Options();
      $q3answer1->question_id = 12;
      $q3answer1->option = '*ReactDOM.render()';
      $q3answer1->correct = 1;
      $q3answer1->save();

      $q3answer2 = new Options();
      $q3answer2->question_id = 12;
      $q3answer2->option = 'React.render()';
      $q3answer2->save();

      $q3answer3 = new Options();
      $q3answer3->question_id = 12;
      $q3answer3->option = 'React.mount()';
      $q3answer3->save();

      $question13 = new Question();
      $question13->topic_id = 2;
      $question13->question_text = 'React.js was created by';
      $question13->save();

      $q3answer1 = new Options();
      $q3answer1->question_id = 13;
      $q3answer1->option = 'Jordan Lee';
      $q3answer1->save();

      $q3answer2 = new Options();
      $q3answer2->question_id = 13;
      $q3answer2->option = 'Tim Lee';
      $q3answer2->save();

      $q3answer3 = new Options();
      $q3answer3->question_id = 13;
      $q3answer3->option = '*Jordan Walke';
      $q3answer3->correct = 1;
      $q3answer3->save();

      $question14 = new Question();
      $question14->topic_id = 2;
      $question14->question_text = 'What create-react-app command do';
      $question14->save();

      $q3answer1 = new Options();
      $q3answer1->question_id = 14;
      $q3answer1->option = '*Creates new react app';
      $q3answer1->correct = 1;
      $q3answer1->save();

      $q3answer2 = new Options();
      $q3answer2->question_id = 14;
      $q3answer2->option = 'Update a react app';
      $q3answer2->save();

      $q3answer3 = new Options();
      $q3answer3->question_id = 14;
      $q3answer3->option = 'install dependencies';
      $q3answer3->save();

      $question15 = new Question();
      $question15->topic_id = 2;
      $question15->question_text = 'How many elements does a react component return?';
      $question15->save();

      $q3answer1 = new Options();
      $q3answer1->question_id = 15;
      $q3answer1->option = '2';
      $q3answer1->save();

      $q3answer2 = new Options();
      $q3answer2->question_id = 15;
      $q3answer2->option = '*1';
      $q3answer2->correct = 1;
      $q3answer2->save();

      $q3answer3 = new Options();
      $q3answer3->question_id = 15;
      $q3answer3->option = 'Multiple';
      $q3answer3->save();

      $question16 = new Question();
      $question16->topic_id = 2;
      $question16->question_text = 'Everything in react is a ....................';
      $question16->save();

      $q3answer1 = new Options();
      $q3answer1->question_id = 16;
      $q3answer1->option = 'class';
      $q3answer1->save();

      $q3answer2 = new Options();
      $q3answer2->question_id = 16;
      $q3answer2->option = '*Component';
      $q3answer2->correct = 1;
      $q3answer2->save();

      $q3answer3 = new Options();
      $q3answer3->question_id = 16;
      $q3answer3->option = 'Module';
      $q3answer3->save();

      $question17 = new Question();
      $question17->topic_id = 2;
      $question17->question_text = 'ReactJS uses ___ to increase performance.';
      $question17->save();

      $q3answer1 = new Options();
      $q3answer1->question_id = 17;
      $q3answer1->option = 'Original DOM';
      $q3answer1->save();

      $q3answer2 = new Options();
      $q3answer2->question_id = 17;
      $q3answer2->option = 'Both Original & Virtual DOM';
      $q3answer2->save();

      $q3answer3 = new Options();
      $q3answer3->question_id = 17;
      $q3answer3->option = '*Virtual DOM';
      $q3answer3->correct = 1;
      $q3answer3->save();

      $question18 = new Question();
      $question18->topic_id = 2;
      $question18->question_text = 'What are the two ways that data gets handled in React?';
      $question18->save();

      $q3answer1 = new Options();
      $q3answer1->question_id = 18;
      $q3answer1->option = '*state & props';
      $q3answer1->correct = 1;
      $q3answer1->save();

      $q3answer2 = new Options();
      $q3answer2->question_id = 18;
      $q3answer2->option = 'services & components';
      $q3answer2->save();

      $q3answer3 = new Options();
      $q3answer3->question_id = 18;
      $q3answer3->option = 'None of the above';
      $q3answer3->save();

      $question19 = new Question();
      $question19->topic_id = 2;
      $question19->question_text = 'What are the two ways that data gets handled in React?';
      $question19->save();

      $q3answer1 = new Options();
      $q3answer1->question_id = 19;
      $q3answer1->option = 'Database';
      $q3answer1->save();

      $q3answer2 = new Options();
      $q3answer2->question_id = 19;
      $q3answer2->option = '*User interface';
      $q3answer2->correct = 1;
      $q3answer2->save();

      $q3answer3 = new Options();
      $q3answer3->question_id = 19;
      $q3answer3->option = 'Connectivity';
      $q3answer3->save();

      $question20 = new Question();
      $question20->topic_id = 2;
      $question20->question_text = 'React supports all the syntax of ........';
      $question20->save();

      $q3answer1 = new Options();
      $q3answer1->question_id = 20;
      $q3answer1->option = 'Native Java';
      $q3answer1->save();

      $q3answer2 = new Options();
      $q3answer2->question_id = 20;
      $q3answer2->option = 'Redux';
      $q3answer2->save();

      $q3answer3 = new Options();
      $q3answer3->question_id = 20;
      $q3answer3->option = '*ES6';
      $q3answer3->correct = 1;
      $q3answer3->save();

      $question21 = new Question();
      $question21->topic_id = 3;
      $question21->question_text = ' Which of the following class indicates a dropdown menu?';
      $question21->save();

      $q3answer1 = new Options();
      $q3answer1->question_id = 21;
      $q3answer1->option = '.dropdown';
      $q3answer1->save();

      $q3answer2 = new Options();
      $q3answer2->question_id = 21;
      $q3answer2->option = '.dropdown-list';
      $q3answer2->save();

      $q3answer3 = new Options();
      $q3answer3->question_id = 21;
      $q3answer3->option = '*.select';
      $q3answer3->correct = 1;
      $q3answer3->save();

      $question22 = new Question();
      $question22->topic_id = 3;
      $question22->question_text = 'A standard navigation tab is created with:';
      $question22->save();

      $q3answer1 = new Options();
      $q3answer1->question_id = 22;
      $q3answer1->option = '*<:ul class=”nav tabs”>';
      $q3answer1->correct = 1;
      $q3answer1->save();

      $q3answer2 = new Options();
      $q3answer2->question_id = 22;
      $q3answer2->option = '<:ul class=”navnav-tabs”>';
      $q3answer2->save();

      $q3answer3 = new Options();
      $q3answer3->question_id = 22;
      $q3answer3->option = '<:ul class=”navigation-tabs”>';
      $q3answer3->save();

      $question23 = new Question();
      $question23->topic_id = 3;
      $question23->question_text = 'What is the default size of H3 bootstrap heading?';
      $question23->save();

      $q3answer1 = new Options();
      $q3answer1->question_id = 23;
      $q3answer1->option = '30px';
      $q3answer1->save();

      $q3answer2 = new Options();
      $q3answer2->question_id = 23;
      $q3answer2->option = '*24px';
      $q3answer2->correct = 1;
      $q3answer2->save();

      $q3answer3 = new Options();
      $q3answer3->question_id = 23;
      $q3answer3->option = '18px';
      $q3answer3->save();

      $question24 = new Question();
      $question24->topic_id = 3;
      $question24->question_text = 'Bootstrap is created by';
      $question24->save();

      $q3answer1 = new Options();
      $q3answer1->question_id = 24;
      $q3answer1->option = 'Mark Jukervich';
      $q3answer1->save();

      $q3answer2 = new Options();
      $q3answer2->question_id = 24;
      $q3answer2->option = '*Mark Otto and Jacob Thornton';
      $q3answer2->correct = 1;
      $q3answer2->save();

      $q3answer3 = new Options();
      $q3answer3->question_id = 24;
      $q3answer3->option = 'None of the above';
      $q3answer3->save();

      $question25 = new Question();
      $question25->topic_id = 3;
      $question25->question_text = 'Which of the following class creates a list of items?';
      $question25->save();

      $q3answer1 = new Options();
      $q3answer1->question_id = 25;
      $q3answer1->option = 'List-grp';
      $q3answer1->save();

      $q3answer2 = new Options();
      $q3answer2->question_id = 25;
      $q3answer2->option = 'Lst-group';
      $q3answer2->save();

      $q3answer3 = new Options();
      $q3answer3->question_id = 25;
      $q3answer3->option = '*List-group';
      $q3answer3->correct = 1;
      $q3answer3->save();

      $question26 = new Question();
      $question26->topic_id = 3;
      $question26->question_text = 'Which of the following class styles a table as a nice basic table with stripes on rows?';
      $question26->save();

      $q3answer1 = new Options();
      $q3answer1->question_id = 26;
      $q3answer1->option = '*.table-striped';
      $q3answer1->correct = 1;
      $q3answer1->save();

      $q3answer2 = new Options();
      $q3answer2->question_id = 26;
      $q3answer2->option = '.table-hover';
      $q3answer2->save();

      $q3answer3 = new Options();
      $q3answer3->question_id = 26;
      $q3answer3->option = '.table';
      $q3answer3->save();

      $question27 = new Question();
      $question27->topic_id = 3;
      $question27->question_text = 'The Bootstrap grid system is based on how many columns?';
      $question27->save();

      $q3answer1 = new Options();
      $q3answer1->question_id = 27;
      $q3answer1->option = '*12';
      $q3answer1->correct = 1;
      $q3answer1->save();

      $q3answer2 = new Options();
      $q3answer2->question_id = 27;
      $q3answer2->option = '5';
      $q3answer2->save();

      $q3answer3 = new Options();
      $q3answer3->question_id = 27;
      $q3answer3->option = '15';
      $q3answer3->save();

      $question28 = new Question();
      $question28->topic_id = 3;
      $question28->question_text = 'Which of the following plugin is used to create a modal window?';
      $question28->save();

      $q3answer1 = new Options();
      $q3answer1->question_id = 28;
      $q3answer1->option = 'popup';
      $q3answer1->save();

      $q3answer2 = new Options();
      $q3answer2->question_id = 28;
      $q3answer2->option = '*Modal';
      $q3answer2->correct = 1;
      $q3answer2->save();

      $q3answer3 = new Options();
      $q3answer3->question_id = 28;
      $q3answer3->option = 'Window';
      $q3answer3->save();

      $question29 = new Question();
      $question29->topic_id = 3;
      $question29->question_text = 'In Bootstrap we can add for';
      $question29->save();

      $q3answer1 = new Options();
      $q3answer1->question_id = 29;
      $q3answer1->option = 'Make proper view of labels';
      $q3answer1->save();

      $q3answer2 = new Options();
      $q3answer2->question_id = 29;
      $q3answer2->option = '*Proper Rendering and Zooming in mobile';
      $q3answer2->correct = 1;
      $q3answer2->save();

      $q3answer3 = new Options();
      $q3answer3->question_id = 29;
      $q3answer3->option = 'Make SEO';
      $q3answer3->save();

      $question30 = new Question();
      $question30->topic_id = 3;
      $question30->question_text = 'Which of the following grid class is used for desktop?';
      $question30->save();

      $q3answer1 = new Options();
      $q3answer1->question_id = 30;
      $q3answer1->option = 'lg';
      $q3answer1->save();

      $q3answer2 = new Options();
      $q3answer2->question_id = 30;
      $q3answer2->option = 'sm';
      $q3answer2->save();

      $q3answer3 = new Options();
      $q3answer3->question_id = 30;
      $q3answer3->option = '*md';
      $q3answer3->correct = 1;
      $q3answer3->save();
  }
}