<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Program;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Program::create([
            'program_image' => 'WORKSHOP.jpg',
            'program_title' => 'EDUCATION CONFERENCES AND WORKSHOP ',
            'program_description' => "Castle Education Conferences and workshops are poised to help participants understand the advancements and new technology in the education industry. This forum grants opportunities for stakeholders to showcase their research with industry peers and reputed journals.
            <p>Our conferences and workshops will teach you how to incorporate innovations and technology into education and find new ways of learning. These skills can be used in practical settings, thus helping you gain a competitive edge.<p>
            <p>Moreover, finding mentors at these conferences is easy through networking. Learn from real-life enactments to understand personality development and critical thinking with Castle Education Conferences<p>
            <p>What are you waiting for? Sign up on our website to register for an event that can boost your career.<p>
            "
        ]);

        Program::create([
            'program_image' => 'BRAINIAC.jpg',
            'program_title' => 'CASTLE BRAINIAC ',
            'program_description' => "Competitions play very important role in motivating student’s performance and drive for excellence in various fields.
            <p>Inter-school competitions are one of the most famous events for students in schools. At Castle Brainiac, students from different schools compete against each other in various events for the exceptionally intelligent person(s) award.<p>
            <p>Students gain substantial experience, showcase skills and enhance their personal aptitude as they participate in Castle Brainiac.<p>
            <p>Below are some of the competitions students gets to participate in Castle Brainiac;<p>
            <ol type='circle'>
            <li >Debate Competition</li>
            <li>Math Competition</li>
            <li>Singing Competitions</li>
            <li>Storytelling Competition</li>
            <li>Science Competition</li>
            <li>Sport Competitions</li>
            <li>Calligraphy Competition</li>
            <li>Creative Writing Competition etc</li>
            </ol>

            <p><b>Advantages of Castle Brainiac Inter-school competition;</b></p>
            <ol type='1'>
            <li><b>Skill Development:</b> Students are encouraged to develop and hone their skills in various areas. Be it academics, sports, or the arts, students have the opportunity to improve and showcase their talents</li>
            <li><b>SHealthy Competition: </b>Competing against students from other schools promotes healthy competition. We encourage participants to strive for excellence, work harder, and aim for personal growth</li>
            <li><b>Networking and Social Skills:</b> Our inter-school competitions foster students’ interaction with peers from different backgrounds, promoting social skills and the ability to work in diverse teams. This exposure can be valuable for personal growth and career development</li>
            <li><b>Platform to Showcase Talent:</b> Inter-school competitions are a great way to showcase the talents of an individual or group by allowing them to compete with each other. Competition always brings out the best in people as it tends to push them to their limits so as to beat their opponents.</li>
            <li>Recognition and Rewards: </b>Winning or performing well in inter-school competitions can lead to recognition, awards, and scholarships</li>
            </ol>
            "
        ]);

        Program::create([
            'program_image' => 'health.jpg',
            'program_title' => 'MENTAL HEALTH CAMPAIGN ',
            'program_description' => "According to the World Health Organization, Suicide is the fourth leading cause of death among young people between 15 and 29 years old. 30% of young people between 15 and 29 years have had some type of mental problem in the last year. Of all young people who noticed symptoms, only half asked for help. The most common symptoms are depression, anxiety, and sleep disorders.
            <p>Childhood and adolescence are crucial periods. Multiple physical, emotional, and social changes can make children and adolescents vulnerable to mental health problems. Education has given attention to physical and sexual health over time, yet mental health has not been systematically and consciously addressed in the classrooms.<p>
            <p>Join us in our Mental Health Campaign for young people.<p>
            "
        ]);

        Program::create([
            'program_image' => 'green.jpg',
            'program_title' => 'GREEN-SCHOOL PROGRAM',
            'program_description' => "Eco-Schools Program’s mission is to provide green technology for schools that will not only benefit the environment but also enhance the overall learning experience for students and staff.
            <p>The rising concerns about climate change and the need for environmental conservation are the major drivers for our proactive steps toward sustainability. Green technology, an essential aspect of this movement, refers to the integration of eco-friendly practices and sustainable solutions in schools.<p>
            <p>The Scope of our Eco-Schools Program includes;.<p>

            <ol type='circle'>
            <li >Energy Efficiency: Illuminating the Path to a Greener Future</li>
            <li>Harnessing the Power of Renewable Energy</li>
            <li>Waste Reduction and Recycling: A Path Towards Zero Waste</li>
            <li>Building Sustainable Infrastructure: A Foundation for a Greener Tomorrow</li>
            <li>The Power of Environmental Education</li>
            <li>Smart Water Management for a Thirsty Planet</li>
            <li>Green Procurement: Sourcing Sustainability</li>
            <li>Embracing Biodiversity: Outdoor Learning Spaces</li>
            <li>Community Engagement for a Collective Impact</li>
            </ol>
            "
        ]);
    }
}
