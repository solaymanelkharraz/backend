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
            ],
            [
                'scenario' => 'The Interruption: You are in a meeting and a colleague keeps interrupting you while you present your web architecture.',
                'option_a' => 'Roll your eyes, look visibly annoyed, and snap at them for interrupting you.',
                'option_b' => '"I hear your point, let me just finish this thought so we have the full context."',
                'correct_answer' => 'B',
                'feedback' => 'Professionalism lost! Reacting with visible annoyance damages your reputation more than the interruption.'
            ],
            [
                'scenario' => 'The Morale Drop: Your team is demotivated because the React project is falling behind schedule.',
                'option_a' => 'Force everyone to work mandatory overtime this weekend until it is done.',
                'option_b' => 'Hold a quick stand-up to identify blockers and offer your support to the person struggling most.',
                'correct_answer' => 'B',
                'feedback' => 'Authority trap! Forcing overtime without support leads to burnout and more bugs.'
            ],
            [
                'scenario' => 'The Panic Room: You hit a critical bug in production. Your team is stuck in "Red Hat" (emotional) panic mode.',
                'option_a' => 'Join the panic, assume the worst, and start changing code randomly to fix it.',
                'option_b' => 'Switch the team to "White Hat" mode by asking, "What are the objective facts we have right now?"',
                'correct_answer' => 'B',
                'feedback' => 'Logic failure! Panic doesn\'t fix code. Objective data does.'
            ],
            [
                'scenario' => 'The Tech War: Two developers are arguing over using Tailwind or Bootstrap, stalling the project.',
                'option_a' => 'Take the side of the developer you like more and tell the other to drop it.',
                'option_b' => 'Ask both to present a 1-minute "Pro/Con" list based on project requirements.',
                'correct_answer' => 'B',
                'feedback' => 'Bias alert! Picking sides without a framework creates long-term resentment.'
            ],
            [
                'scenario' => 'The Scope Creep: You are a freelancer. A client asks for a massive new feature that wasn\'t in the original contract.',
                'option_a' => 'Agree to do it for free just so they don\'t get angry or leave a bad review.',
                'option_b' => 'Politely explain this is a change of scope and provide an updated quote for the extra hours.',
                'correct_answer' => 'B',
                'feedback' => 'Revenue loss! Working for free devalues your time and sets a dangerous precedent.'
            ],
            [
                'scenario' => 'The Resistance: The company is switching from PHP to Node.js. Many senior devs are resisting the change.',
                'option_a' => 'Tell them they need to adapt or risk losing their jobs to younger developers.',
                'option_b' => 'Organize a "Knowledge Exchange" where seniors can see how their logic applies to the new tech.',
                'correct_answer' => 'B',
                'feedback' => 'Resistance! People fear what they don\'t understand. Empathy is the key to change.'
            ],
            [
                'scenario' => 'The Burnout: You have been coding for 14 hours straight, ignoring your family, health, and sleep.',
                'option_a' => 'Drink a 4th energy drink and push through the pain to hit the commit milestone.',
                'option_b' => 'Close the laptop. You realize that "Growth" and "Health" pillars are currently at zero.',
                'correct_answer' => 'B',
                'feedback' => 'Imbalance! If one pillar collapses, the whole structure of your life falls with it.'
            ]
        ];        foreach ($questions as $q) {
            Question::create($q);
        }
    }
}