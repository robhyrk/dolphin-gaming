<?php get_header(); ?>

<div class="programs">

    <article class="container packages-main programs">
        <h1 class=""><?php the_title(); ?></h1>
        <p class="inner-content text-center">
        Dolphin Gaming has different programs throughout the week. 
        Our programs will help you understand the schedule of the session and what prizes are available. 
        See you soon!
        </p>
        <div class="program-table">
            <table class="table">
                <thead>
                    <tr class="">
                        <th  class="day text-center" scope="col">Day</th>
                        <th  class="text-center" scope="col">10 am,</br> 1 pm, 4pm</th>
                        <th  class="text-center" scope="col">7 pm</th>
                        <th  class="text-center" scope="col">10:15 am</th>
                        <th  class="text-center" scope="col">1 am</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <th class="" scope="row">Sunday</th>
                        <td rowspan="7" class="align-middle active-program"><i class="fas fa-download"></i></td>
                        <td rowspan="3" class="align-middle active-program"><i class="fas fa-download "></i></td>
                        <td rowspan="3" class="align-middle active-program"><i class="fas fa-download"></i></td>
                        <td rowspan="5" class="align-middle active-program"><i class="fas fa-download"></i></td>
                    </tr>
                    <tr class="text-center">
                        <th class="" scope="row">Monday</th>
                    </tr>
                    <tr class="text-center">
                        <th class="" scope="row">Tuesday</th>
                    </tr>
                    <tr class="text-center">
                        <th class="" scope="row">Wednesday</th>
                        <td id="active-cell" class="active-program"><i class="fas fa-download"></i></td>
                        <td class="active-program"><i class="fas fa-download"></i></td>
                    </tr>
                    <tr class="text-center">
                        <th class="" scope="row">Thursday</th>
                        <td class="active-program"><i class="fas fa-download"></i></td>
                        <td class="active-program"><i class="fas fa-download"></i></td>
                    </tr>
                    <tr class="text-center">
                        <th class="" scope="row">Friday</th>
                        <td rowspan="2" class="align-middle active-program"><i class="fas fa-download"></td>
                        <td rowspan="2" class="align-middle active-program"><i class="fas fa-download"></td>
                        <td rowspan="2" class="align-middle active-program"><i class="fas fa-download"></td>
                    </tr>
                    <tr class="text-center">
                        <th class="" scope="row">Saturday</th>
                    </tr>
                </tbody>
            </table>
        </div>
    </article>

    <article class="container packages-main daily-prizes">
        <h1 class="">Daily Prizes</h1>
        <p class="inner-content text-center">
        Here is a highlight of our consolation prizes throughout the week per session. 
        For example, our Friday 7 pm session gives out 20 x $1,000.00 prizes and more!
        </p>
        <div class="program-table">
            <table class="table daily-table">
                <thead>
                    <tr class="">
                        <th  class="day text-center" scope="col">Day</th>
                        <th  class="text-center" scope="col">10 am,</br> 1 pm, 4pm</th>
                        <th  class="text-center" scope="col">7 pm</th>
                        <th  class="text-center" scope="col">10:15 am</th>
                        <th  class="text-center" scope="col">1 am</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <th class="" scope="row">Sunday</th>
                        <td class="align-middle">10 X $500</td>
                        <td class="align-middle">10 X $500</td>
                        <td class="align-middle">10 X $500</td>
                        <td class="align-middle">10 X $500</td>
                    </tr>
                    <tr class="text-center">
                        <th class="" scope="row">Monday</th>
                        <td class="align-middle">10 X $500</td>
                        <td class="align-middle">10 X $500</td>
                        <td class="align-middle">10 X $500</td>
                        <td class="align-middle">10 X $500</td>
                    </tr>
                    <tr class="text-center">
                        <th class="" scope="row">Tuesday</th>
                        <td class="align-middle">10 X $500</td>
                        <td class="align-middle">10 X $500</td>
                        <td class="align-middle">10 X $500</td>
                        <td class="align-middle">10 X $500</td>
                    </tr>
                    <tr class="text-center" id="active-row">
                        <th class="" scope="row">Wednesday</th>
                        <td class="align-middle">10 X $500</td>
                        <td class="align-middle">10 X $500</td>
                        <td class="align-middle">10 X $500</td>
                        <td class="align-middle">10 X $500</td>
                    </tr>
                    <tr class="text-center">
                        <th class="" scope="row">Thursday</th>
                        <td class="align-middle">10 X $500</td>
                        <td class="align-middle">10 X $500</td>
                        <td class="align-middle">10 X $500</td>
                        <td class="align-middle">10 X $500</td>
                    </tr>
                    <tr class="text-center">
                        <th class="" scope="row">Friday</th>
                        <td class="align-middle">10 X $500</td>
                        <td class="align-middle">10 X $500</td>
                        <td class="align-middle">10 X $500</td>
                        <td class="align-middle">10 X $500</td>
                    </tr>
                    <tr class="text-center">
                        <th class="" scope="row">Saturday</th>
                        <td class="align-middle">10 X $500</td>
                        <td class="align-middle">10 X $500</td>
                        <td class="align-middle">10 X $500</td>
                        <td class="align-middle">10 X $500</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </article>


<?php get_footer();?>