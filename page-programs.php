<?php 
    get_header();
    $programs = get_field("programs");
    $content = get_field("content");
?>

<div class="programs">

    <article class="container packages-main programs">
        <h1 class=""><?php the_title(); ?></h1>
        <p class="inner-content text-center">
        <?php echo $content["top_message"] ;?>
        </p>
        <div class="program-table">
            <table class="table">
                <thead>
                    <tr class="">
                        <th  class="day text-center" scope="col"><?php echo $content["day"] ;?></th>
                        <th  class="text-center" scope="col">10 am,</br> 1 pm, 4pm</th>
                        <th  class="text-center" scope="col">7 pm</th>
                        <th  class="text-center" scope="col">10:15 am</th>
                        <th  class="text-center" scope="col">1 am</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <th class="" scope="row"><?php echo $content["sun"] ;?></th>
                        <td rowspan="7" class="align-middle active-program"><a target="_blank" href="<?php echo $programs["sun-sat_1014"];?>"><i class="fas fa-download"></i></a></td>
                        <td rowspan="3" class="align-middle active-program"><a target="_blank" href="<?php echo $programs["sun-tues_7"];?>"><i class="fas fa-download "></i></a></td>
                        <td rowspan="3" class="align-middle active-program"><a target="_blank" href="<?php echo $programs["sun-tues_1015"];?>"><i class="fas fa-download"></i></a></td>
                        <td rowspan="5" class="align-middle active-program"><a target="_blank" href="<?php echo $programs["sun-thurs_1"];?>"><i class="fas fa-download"></i></a></td>
                    </tr>
                    <tr class="text-center">
                        <th class="" scope="row"><?php echo $content["mon"] ;?></th>
                    </tr>
                    <tr class="text-center">
                        <th class="" scope="row"><?php echo $content["tues"] ;?></th>
                    </tr>
                    <tr class="text-center">
                        <th class="" scope="row"><?php echo $content["wed"] ;?></th>
                        <td id="active-cell" class="active-program"><a target="_blank" href="<?php echo $programs["wed_7"];?>"><i class="fas fa-download"></i></a></td>
                        <td class="active-program"><a target="_blank" href="<?php echo $programs["wed_1015"];?>"><i class="fas fa-download"></i></a></td>
                    </tr>
                    <tr class="text-center">
                        <th class="" scope="row"><?php echo $content["thurs"] ;?></th>
                        <td class="active-program"><a target="_blank" href="<?php echo $programs["thurs_7"];?>"><i class="fas fa-download"></i></a></td>
                        <td class="active-program"><a target="_blank" href="<?php echo $programs["thurs_1015"];?>"><i class="fas fa-download"></i></a></td>
                    </tr>
                    <tr class="text-center">
                        <th class="" scope="row"><?php echo $content["fri"] ;?></th>
                        <td rowspan="2" class="align-middle active-program"><a target="_blank" href="<?php echo $programs["fri-sat_7"];?>"><i class="fas fa-download"></i></a></td>
                        <td rowspan="2" class="align-middle active-program"><a target="_blank" href="<?php echo $programs["fri-sat_1015"];?>"><i class="fas fa-download"></i></a></td>
                        <td rowspan="2" class="align-middle active-program"><a target="_blank" href="<?php echo $programs["fri-sat_1"];?>"><i class="fas fa-download"></i></a></td>
                    </tr>
                    <tr class="text-center">
                        <th class="" scope="row"><?php echo $content["sat"] ;?></th>
                    </tr>
                </tbody>
            </table>
        </div>
    </article>
    <?php $timestamp = time();?>
    <article class="container packages-main daily-prizes">
        <h1 class=""><?php echo $content["daily_prizes_title"] ;?></h1>
        <p class="inner-content text-center">
        <?php echo $content["daily_prizes"] ;?>
        </p>
        <div class="program-table">
            <table class="table daily-table">
                <thead>
                    <tr class="">
                        <th  class="day text-center" scope="col"><?php echo $content["day"] ;?></th>
                        <th  class="text-center" scope="col">10 am,</br> 1 pm, 4pm</th>
                        <th  class="text-center" scope="col">7 pm</th>
                        <th  class="text-center" scope="col">10:15 am</th>
                        <th style="border-right:none" class="text-center" scope="col">1 am</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center" id="<?php echo date('D', $timestamp) === 'Sun' ?  'active-row' : null ;?>">
                        <th class="" scope="row"><?php echo $content["sun"] ;?></th>
                        <td class="align-middle">10 X $500</td>
                        <td class="align-middle">10 X $500</td>
                        <td class="align-middle">10 X $500</td>
                        <td class="align-middle">10 X $500</td>
                    </tr>
                    <tr class="text-center" id="<?php echo date('D', $timestamp) === 'Mon' ?  'active-row' : null ;?>">
                        <th class="" scope="row"><?php echo $content["mon"] ;?></th>
                        <td class="align-middle">10 X $500</td>
                        <td class="align-middle">10 X $500</td>
                        <td class="align-middle">10 X $500</td>
                        <td class="align-middle">10 X $500</td>
                    </tr>
                    <tr class="text-center" id="<?php echo date('D', $timestamp) === 'Tues' ?  'active-row' : null ;?>">
                        <th class="" scope="row"><?php echo $content["tues"] ;?></th>
                        <td class="align-middle">10 X $500</td>
                        <td class="align-middle">10 X $500</td>
                        <td class="align-middle">10 X $500</td>
                        <td class="align-middle">10 X $500</td>
                    </tr>
                    <tr class="text-center"  id="<?php echo date('D', $timestamp) === 'Wed' ?  'active-row' : null ;?>">
                        <th class="" scope="row"><?php echo $content["wed"] ;?></th>
                        <td class="align-middle">10 X $500</td>
                        <td class="align-middle">10 X $500</td>
                        <td class="align-middle">10 X $500</td>
                        <td class="align-middle">10 X $500</td>
                    </tr>
                    <tr class="text-center"  id="<?php echo date('D', $timestamp) === 'Thu' ?  'active-row' : null ;?>">
                        <th class="" scope="row"><?php echo $content["thurs"] ;?></th>
                        <td class="align-middle">10 X $500</td>
                        <td class="align-middle">10 X $500</td>
                        <td class="align-middle">10 X $500</td>
                        <td class="align-middle">10 X $500</td>
                    </tr>
                    <tr class="text-center" id="<?php echo date('D', $timestamp) === 'Fri' ?  'active-row' : null ;?>">
                        <th class="" scope="row"><?php echo $content["fri"] ;?></th>
                        <td class="align-middle">10 X $500</td>
                        <td class="align-middle">10 X $500</td>
                        <td class="align-middle">10 X $500</td>
                        <td class="align-middle">10 X $500</td>
                    </tr>
                    <tr class="text-center"  id="<?php echo date('D', $timestamp) === 'Sat' ?  'active-row' : null ;?>">
                        <th class="" scope="row"><?php echo $content["sat"] ;?></th>
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