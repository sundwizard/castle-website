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
        Event::create([
            'description' => "The Kaduna State Outstanding Teacher and Schools Award under Castle Education Consult, proudly supported by the Kaduna State Government seeks to identify and acknowledge outstanding educators who go above and beyond, making a significant impact on students' lives and communities. By shining a spotlight on these exemplary teachers, we hope to inspire a ripple effect of excellence in education.
            <br>This year’s OTSA ceremony will be on the 5th of October 2024 in commemoration of World Teachers’ Day with the theme: \"<b>Empowering Educators: Strengthening Resilience, Building Sustainability</b>\",<br>
            <h3><b>Eligibility & Criteria</b></h3>
            <p>Candidates for the Outstanding Teachers and Schools Award will be judged on a rigorous set of criteria to identify exceptional teachers in the various categories who have made an immense contribution to the profession.</p>

            <h4><b>Eligibility</b></h4>
            <p>The award is open to:</p>

            <ol>
                <li>Teachers in private/public primary and secondary schools.</li>
                <li>Teachers must spend at least 10 hours per week teaching children face-to-face.</li>
                <li>The Award is open to all teachers and schools in Kaduna States.</li>
            </ol>


            <h4><b>Criteria</b></h4>
            <p>Applicants for the Outstanding Teachers and Schools Award will be judged based on a rigorous set of criteria to identify extraordinary teachers and schools who have made immense contributions to the profession. The Academy will look out for evidence of a combination of:</p>

            <ol>
                <li>Employing effective instructional practices that are replicable and scalable to influence the quality of education globally.</li>
                <li>Employing innovative instructional practices that address the particular challenges of the school, community, or Kaduna State and which have shown sufficient evidence to suggest they could be effective in addressing such challenges in a new way.</li>
                <li>Achieving demonstrable student learning outcomes in the classroom.</li>
                <li>Impact in the community beyond the classroom that provides unique and distinguished models of excellence for the teaching profession and others.</li>
                <li>Helping children become global citizens by providing them with a values-based education that gives them a competitive edge.</li>
                <li>Improving the teaching profession by helping to raise the bar of teaching, sharing best practices, and helping colleagues overcome any challenges they face in their school.</li>
            </ol>

            <h4><b>Award Categories</b></h4>
            <p><b>Teachers:</b></p>

            <ol>
                <li>Outstanding Science Teacher Award (Chemistry, Physics, Biology).</li>
                <li>Outstanding Mathematics Teacher Award.</li>
                <li>Outstanding English Teacher Award.</li>
                <li>Outstanding Tech. Teacher Awardd.</li>
                <li>Outstanding Agro Teacher Award.</li>
                <li>6.Outstanding Literature Teacher Award (Music, Poem, Fine Award).</li>
                <li>TEACHERS AMBASSADOR AWARD (Project Based).</li>
            </ol>

            <p><b>Schools:</b></p>

            <ol>
                <li>Best WAEC Result.</li>
                <li>Highest Jamb Score.</li>
                <li>Most Conducive Learning Environment.</li>
                <li>Most Technologically Driven School.</li>
                <li>Community Development Award.</li>
            </ol>
            ",
            "event_title" => "KADUNA STATE OUTSTANDING TEACHERS AND SCHOOLS AWARD (OTSA) 2024",
            'type_of_event' => "Teachers Award",
            'image' => "teacher.jpg",
            'event_date' => "2024-10-05",
            'event_time' => "10:00",
            "event_location" => "Q 10 Quoi Street, Sabon Tasha, Kaduna State",
        ]);
    }
}
