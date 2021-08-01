<div class="bingo-jackpots-subsection max-width-lg">
<h2 class="p-5">Bingo Jackpot</h2>
                <h3 class="section-subtitle text-white">Daily Rapids</h3>
                <?php $rapids = get_field('rapids', 'options') ;?>
                <table class="table">
                    <thead>
                        <tr class="d-flex">
                            <th class="col-3 align-self-end" scope="col">Game Name</th>
                            <th class="col-5 text-center  align-self-end" scope="col">Designated Number</th>
                            <th class="col-4 text-right text-md-center"  scope="col" class="text-right">Progressive Jackpot</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="d-flex">
                            <th class="col-3"  scope="row">Daily Rapids</th>
                            <td class="col-5 text-center"><?php echo $rapids['daily'] ;?></td>
                            <td class="col-4 text-md-center"><?php echo $rapids['daily_jackpot'] ;?></td>
                        </tr>
                        <tr class="d-flex">
                            <th class="col-3"  scope="row">Sunday Rapids</th>
                            <td class="col-5 text-center"><?php echo $rapids['sunday_rapids'] ;?></td>
                            <td class="col-4 text-md-center"><?php echo $rapids['sunday_jackpot'] ;?></td>
                        </tr>
                        <tr class="d-flex">
                            <th class="col-3"  scope="row">Moneyball</th>
                            <td class="col-5 text-center"><?php echo $rapids['moneyball_rapids'] ;?></td>
                            <td class="col-4 text-md-center"><?php echo $rapids['moneyball_jackpot'] ;?></td>
                        </tr>
                    </tbody>
                </table>
            </div>

<div class="bingo-jackpots-subsection max-width-lg">
<h2 class="p-5">Bingo Jackpot</h2>
                <h3 class="section-subtitle text-white">E-Bingo</h3>
                <?php $ebingo = get_field('e-bingo', 'option');?>
                <table class="table">
                    <thead>
                        <tr class="d-flex">
                            <th class="col-3  align-self-end"  scope="col">Game name</th>
                            <th class="col-5 text-center  align-self-end" scope="col">Designated Number</th>
                            <th class="col-4 text-right text-md-center"  scope="col" class="text-right">Progressive Jackpot</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="d-flex">
                            <th class="col-3" scope="row">Turbo</th>
                            <td class="col-5 text-center"><?php echo $ebingo['turbo_number'] ;?></td>
                            <td class="col-4 text-md-center">$<?php echo $ebingo['turbo'] ;?></td>
                        </tr>
                        <tr class="d-flex">
                            <th class="col-3"  scope="row">POD Progressive</th>
                            <td class="col-5 text-center"><?php echo $ebingo['pod_progressive_number'] ;?></td>
                            <td class="col-4 text-md-center">$<?php echo $ebingo['pod_progressive'] ;?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
