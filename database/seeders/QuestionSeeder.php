<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;

class QuestionSeeder extends Seeder
{
    public function run(): void
    {
        $questions = [
            [
                'scenario' => 'The Team Crisis: Your project deadline is tomorrow. A teammate has not submitted their part, blocking your work. You are stressed.',
                'option_a' => 'Send an angry group message calling them out and complain to the supervisor.',
                'option_b' => 'Send them a private message to check in, offer help, and see if they are okay.',
                'correct_answer' => 'B',
                'feedback' => 'Conflict Exploded! Your teammate had a family emergency. Public blame destroyed team trust.'
            ],
            [
                'scenario' => 'The Time Crunch: Your boss gives you an urgent task, but you are already handling a critical issue for your biggest client. Both are due in one hour.',
                'option_a' => 'Try to do both at the exact same time by rushing through the work.',
                'option_b' => 'Immediately tell your boss about the client issue and ask which one takes priority.',
                'correct_answer' => 'B',
                'feedback' => 'Quality Crash! By rushing both, you made critical errors on the client project and angered the boss.'
            ],
            [
                'scenario' => 'The Harsh Feedback: You spent weeks on a design. Your manager reviews it and says it completely misses the mark and needs to be redone.',
                'option_a' => 'Get defensive, explain why your design is actually right, and argue with the manager.',
                'option_b' => 'Take a deep breath, write down their points, and ask clarifying questions to understand what they want.',
                'correct_answer' => 'B',
                'feedback' => 'Ego Trap! Your defensiveness made you look unprofessional and unwilling to learn.'
            ],
            [
                'scenario' => 'The Tech Disaster: You are 5 minutes away from giving a major presentation to investors, and your laptop completely dies. It will not turn on.',
                'option_a' => 'Apologize profusely, cancel the meeting, and ask to reschedule for next week.',
                'option_b' => 'Grab a whiteboard marker, confidently walk in, and pitch the core ideas from memory.',
                'correct_answer' => 'B',
                'feedback' => 'Opportunity Lost! The investors flew out today only. Canceling showed a lack of adaptability.'
            ],
            [
                'scenario' => 'The Vague Request: A senior manager asks you to "improve the website" but gives no specific details. They are very busy and hard to reach.',
                'option_a' => 'Guess what they mean and spend a week completely redesigning the homepage.',
                'option_b' => 'Draft a quick email with 3 specific ideas and ask them to reply with a quick "yes" to the best one.',
                'correct_answer' => 'B',
                'feedback' => 'Wasted Effort! You guessed wrong and spent a week building something the manager didn\'t want.'
            ],
            [
                'scenario' => 'The Stolen Credit: In a team meeting, a colleague presents a great idea you came up with and takes all the credit for it.',
                'option_a' => 'Interrupt them immediately in front of everyone and loudly claim the idea is yours.',
                'option_b' => 'Let them finish, then calmly chime in to add technical details, saying "As we discussed when I drafted this..."',
                'correct_answer' => 'B',
                'feedback' => 'Unprofessional! Yelling in the meeting made you look hostile and derailed the entire presentation.'
            ]
        ];

        foreach ($questions as $q) {
            Question::create($q);
        }
    }
}