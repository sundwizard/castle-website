<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;
class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'service_image' => 'stem.jpg',
            'service_title' => 'Castle STEM',
            'service_description' => "Our School-based and Centre-based STEM program is a combo package that contains Space Science and Rocketry, Robotics, Coding and Mastering Math with the use of Abacus for mental arithmetic.
            STEM is the integration of science, technology, engineering, and mathematics which is usually presented through hands-on and relevant real-world learning experiences. By exposing students to STEM and giving them opportunities to explore STEM-related concepts, they will develop a passion for it and hopefully pursue a career in a STEM field.
            <ol>
            <li><b>Mastering Math</b></li> <p>This program develops solid number sense, including fluency and flexibility with number facts, photographic memory, speed and accuracy in number work, enhanced listening skills, enhanced brain power, confidence, presentation, etc.… which is expected to have a lasting impact on future learning for all children. This program focuses on the key knowledge and understanding needed in Reception classes and progression through KS1-12. Participating schools will receive central training (online and face-to-face) and a wealth of pupil-facing resources. At the basic level, pupils/students will learn number computing with the use of ABACUS and proceed to more complex mathematics content in a simplified approach.</p>
            <li><b>Introduction to Astronomy, Space Science and Rocketry</b></li> <p>Model rocket clubs offer many opportunities normally not available to individual rocketeers. Unlimited educational and recreational activities are available to club members who work together in an atmosphere of team cooperation. A club environment permits the sharing of ideas and the opportunity to engage in projects beyond the resources or abilities of a single person. The skills and expertise of individuals in such varied areas as model construction and finishing, electronics, mathematics, aerodynamics, physics, drafting, woodworking, writing, and leadership can be available to all club members for the carrying out of the highest quality research and development projects. The club situation tends to promote individual creativity and competitive sportsmanship. In addition to sharing their knowledge, club members can pool their resources to develop a fully equipped launch site to outfit a club laboratory or workshop.</p><p>The organization of this content provides an opportunity to participate in a variety of events. Potential club activities include sport-flying launches, various types of contests, research and development projects, and workshops. Field trips, conferences, aerospace films, guest speakers, educational activities, special presentations, demonstrations, and exhibits are also available to organized clubs. A model rocket club is where the action is! An organized model rocketry program will involve the community in exciting Space Age experiences.
            A public model rocket demonstration or exhibit followed by an organizational meeting is an excellent combination for bringing potential rocketeers and interested individuals of a community together. We first need to inform the local recreation departments, area schools, youth groups, service organizations, the military, newspapers and radio and television stations should all be contacted and given the dates, times and places for a public demonstration and the organizational meeting. In addition, recreation buildings and schools are excellent places to display informational posters and club sign-up sheets</p>

            <li><b>Robotics and Coding</b></li> <p>Robotics is an entertaining and innovative pedagogical tool that is becoming more and more important every day since, through recreational activities, students develop knowledge and skills that will be very useful for the future. It is the branch of engineering that specializes in the entire creative, construction and application process of robots.
            </ol>
            Through coding, children learn to quickly fix and try again in different ways when something doesn't work out. Coding also equips kids with the ability to stick with a problem and work on finding a solution. This problem-solving technique is transferable to a lot of other fields.</p>"

        ]);


        Service::create([
            'service_image' => 'plan.jpg',
            'service_title' => 'School Set-up/Improvement Plan',
            'service_description' => "\"If you don't know where you are going, any road will take you there.\" The foundation of strong school improvement is a realistic plan that identifies the key areas for development. Castle Educational Consult can help guide you through this minefield and develop a plan that sits in front and Centre in your school improvement efforts, not gathering dust in a drawer",
        ]);

        Service::create([
            'service_image' => 'talent.jpg',
            'service_title' => 'Talent Acquisition/Recruitment & Selection',
            'service_description' => "Don't allow a gap in your staff to slow the pace of school improvement. Whether you are faced with an unexpected absence or are looking for a new permanent member of staff, Castle Education can provide the solution. We recruit exclusively for the education sector <p>Whether you need senior or middle leaders, project managers, School Improvement Partners, or a team to turn a school around, we have the right candidates for you, experienced, up-to-date, and ready to start work.
            With our comprehensive database of senior and middle leaders, we can save you hours wading through unsuitable CVs and provide high-quality candidates for leadership positions immediately. Don’t let a resignation or unexpected absence hurt the staff and pupils in your school</p>",
        ]);

        Service::create([
            'service_image' => 'curriculum.jpg',
            'service_title' => 'Curriculum Development and Implementation',
            'service_description' => "Do you have questions or problems with the content of what you teach and how you teach in your school? Worry no further. Castle Education Consult can help you develop a robust curriculum that meets the 21st-century educational challenges and makes learning relevant and meaningful to the children. We can help you adopt an integrated curriculum that focuses on each child as a learner and embodies the aspirations your school holds for the next generation of learners",
        ]);


        Service::create([
            'service_image' => 'canceling.jpg',
            'service_title' => 'Career Guidance and Counseling',
            'service_description' => "Career guidance and counseling make a significant difference to both the individual's and school's performance. We provide objective, focused, professional support to help students break down barriers to their success. This increases learning satisfaction and enables students to make measurable progress in realizing their potential and increasing their effectiveness",
        ]);

        Service::create([
            'service_image' => 'routine.jpg',
            'service_title' => 'Routine Inspection and Appraisal of School Objectives',
            'service_description' => "With the constant changes to the educational framework and ever-increasing expectations on schools, how will your school measure up when the inspector walks through the door?
            <br>Increasingly, schools aren't willing to leave this to chance and are commissioning Castle Education’s trained inspectors to perform mock inspections to give them an understanding of their strengths and weaknesses.

            <br>In addition to giving, you a clear and objective snapshot of your school we can also provide you with practical solutions for addressing the identified weaknesses and turning them into strengths",
        ]);

    }
}
