<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;


class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Event::create([
        //     'description' => "The Kaduna State Outstanding Teacher and Schools Award under Castle Education Consult, proudly supported by the Kaduna State Government seeks to identify and acknowledge outstanding educators who go above and beyond, making a significant impact on students' lives and communities. By shining a spotlight on these exemplary teachers, we hope to inspire a ripple effect of excellence in education.
        //     <br>This year’s OTSA ceremony will be on the 5th of October 2024 in commemoration of World Teachers’ Day with the theme: \"<b>Empowering Educators: Strengthening Resilience, Building Sustainability</b>\",<br>
        //     <h3><b>Eligibility & Criteria</b></h3>
        //     <p>Candidates for the Outstanding Teachers and Schools Award will be judged on a rigorous set of criteria to identify exceptional teachers in the various categories who have made an immense contribution to the profession.</p>

        //     <h4><b>Eligibility</b></h4>
        //     <p>The award is open to:</p>

        //     <ol>
        //         <li>Teachers in private/public primary and secondary schools.</li>
        //         <li>Teachers must spend at least 10 hours per week teaching children face-to-face.</li>
        //         <li>The Award is open to all teachers and schools in Kaduna States.</li>
        //     </ol>


        //     <h4><b>Criteria</b></h4>
        //     <p>Applicants for the Outstanding Teachers and Schools Award will be judged based on a rigorous set of criteria to identify extraordinary teachers and schools who have made immense contributions to the profession. The Academy will look out for evidence of a combination of:</p>

        //     <ol>
        //         <li>Employing effective instructional practices that are replicable and scalable to influence the quality of education globally.</li>
        //         <li>Employing innovative instructional practices that address the particular challenges of the school, community, or Kaduna State and which have shown sufficient evidence to suggest they could be effective in addressing such challenges in a new way.</li>
        //         <li>Achieving demonstrable student learning outcomes in the classroom.</li>
        //         <li>Impact in the community beyond the classroom that provides unique and distinguished models of excellence for the teaching profession and others.</li>
        //         <li>Helping children become global citizens by providing them with a values-based education that gives them a competitive edge.</li>
        //         <li>Improving the teaching profession by helping to raise the bar of teaching, sharing best practices, and helping colleagues overcome any challenges they face in their school.</li>
        //     </ol>

        //     <h4><b>Award Categories</b></h4>
        //     <p><b>Teachers:</b></p>

        //     <ol>
        //         <li>Outstanding Science Teacher Award (Chemistry, Physics, Biology).</li>
        //         <li>Outstanding Mathematics Teacher Award.</li>
        //         <li>Outstanding English Teacher Award.</li>
        //         <li>Outstanding Tech. Teacher Awardd.</li>
        //         <li>Outstanding Agro Teacher Award.</li>
        //         <li>6.Outstanding Literature Teacher Award (Music, Poem, Fine Award).</li>
        //         <li>TEACHERS AMBASSADOR AWARD (Project Based).</li>
        //     </ol>

        //     <p><b>Schools:</b></p>

        //     <ol>
        //         <li>Best WAEC Result.</li>
        //         <li>Highest Jamb Score.</li>
        //         <li>Most Conducive Learning Environment.</li>
        //         <li>Most Technologically Driven School.</li>
        //         <li>Community Development Award.</li>
        //     </ol>
        //     ",
        //     "event_title" => "KADUNA STATE OUTSTANDING TEACHERS AND SCHOOLS AWARD (OTSA) 2024",
        //     'type_of_event' => "Teachers Award",
        //     'image' => "teacher.jpg",
        //     'event_date' => "2024-10-05",
        //     'event_time' => "10:00",
        //     "event_location" => "Q 10 Quoi Street, Sabon Tasha, Kaduna State",
        // ]);

        Event::create([
            'description' => "As educators and stakeholders committed to providing the best possible learning experiences for all students, it is essential that we continuously strive to deepen our understanding and refine our approaches in supporting individuals with diverse learning needs. This specialized training initiative aims to empower participants with the knowledge, strategies, and resources necessary to create truly inclusive environments where every learner can thrive.

            <p>Key highlights of the training program include:</p>

            <ol>
                <li><b>Understanding Diverse Needs: </b>Delving into the spectrum of special educational needs and disabilities, including but not limited to autism spectrum disorders, ADHD, dyslexia, and physical disabilities, to gain a comprehensive understanding of the challenges students may face.</li>
                <li><b>Efective Teaching Strategies:</b> Equipping educators with evidence-based instructional techniques, adaptive learning strategies, and assistive technologies to effectively cater to the individual needs of students with diverse abilities.</li>
                <li><b>Collaborative Partnership: </b>Facilitating meaningful collaboration between teachers, parents, and school managers to foster a holistic support system that nurtures the academic, social, and emotional development of students with special needs.</li>
                <li><b>Legal and Ethical Considerations: </b> Providing insights into the legal framework surrounding special education, including rights and responsibilities under relevant legislation, and fostering ethical practices that uphold the dignity and rights of every student.</li>
                <li><b>Creating Inclusive Learning Environments: </b> Cultivating a culture of inclusivity within educational settings through proactive measures such as Universal Design for Learning (UDL), positive behavior support, and promoting empathy and acceptance among peers.</li>
            </ol>

            <p>Our aim is not only to impart knowledge but also to inspire a collective commitment to championing the rights and potential of every learner within our community. By fostering a culture of inclusion and collaboration, we can create educational environments that celebrate diversity and empower every student to reach their full potential.</p>

            Click <a href='https://chat.whatsapp.com/J6EzV8csQFq4JtsEGxXVel'>here</a> to join our whatsapp group
            ",
            "event_title" => "Special Needs Training for Teachers, Parents and School Managers",
            'type_of_event' => "Teachers Award",
            'image' => "teacher.jpg",
            'event_date' => "2024-06-29",
            'event_time' => "10:00",
            "event_location" => "Q 10 Quoi Street, Sabon Tasha, Kaduna State",
        ]);
    }
}
