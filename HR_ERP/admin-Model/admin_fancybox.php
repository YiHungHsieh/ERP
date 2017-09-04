<script src='http://code.jquery.com/ui/1.10.3/jquery-ui.js'></script>

<div class="fancy">
     <?php if($_GET['table']==leave) {?>
     <form action="../Controller/approve.php" method="get">
     <h2>退件原因</h2>
     <table cellspacing="0">
               <th>申請人</th>
               <th>公差時間</th>
               <th>開始時間</th>
               <th>結束時間</th>
               <th>請假類別</th>
               <th>請假時數</th>
          <tr> 
              <?php if($_GET['who']=='hr'){ ?>
               <td style="width:70px" name=l_name><?php echo $_GET["name"]; ?></td>
               <td style="width:215px"><?php echo $_GET["startDate"]; ?>~<?php echo $_GET["endDate"];?></td>
               <td style="width:70px"><?php echo substr( $_GET["startTime"],0,-3);?></td>
               <td style="width:70px"><?php echo substr( $_GET["endTime"],0,-3);?></td>
               <td style="width:70px"><?php echo $_GET["type"]?></td>
               <td style="width:70px"><?php echo $_GET["hrs"];?></td>
               <input style="display:none" type="text" name="yesNO" value="<?php echo $_GET['yesNO']?>">
               <input style="display:none" type="text" name="who" value="<?php echo $_GET['who']?>">
               <input style="display:none" type="text" name="table" value="<?php echo $_GET['table']?>">
               <input style="display:none" type="text" name="name" value="<?php echo $_GET["name"]; ?>">
               <?php }else{ ?>
               <td style="width:70px"><?php echo $_GET["name"]; ?></td>
               <td style="width:215px"><?php echo $_GET["startDate"]; ?>~<?php echo $_GET["endDate"];?></td>
               <td style="width:70px"><?php echo substr( $_GET["startTime"],0,-3);?></td>
               <td style="width:70px"><?php echo substr( $_GET["endTime"],0,-3);?></td>
               <td style="width:70px"><?php echo $_GET["type"]?></td>
               <td style="width:70px"><?php echo $_GET["hrs"];?></td>
               <td style="width:70px"><?php echo $_GET["hrCheck"];?></td>
               <input style="display:none" type="text" name="yesNO" value="<?php echo $_GET['yesNO']?>">
               <input style="display:none" type="text" name="who" value="<?php echo $_GET['who']?>">
               <input style="display:none" type="text" name="table" value="<?php echo $_GET['table']?>">
               <input style="display:none" type="text" name="name" value="<?php echo $_GET["name"]; ?>">
               <?php }?>
          </tr>
          </table>
          <textarea name="reason" id="reason" cols="30" rows="10"></textarea> 
          <input style="display:none" type="text" id="id" name="id" value="<?php echo $_GET['id']?>">
          <div class="sub_btn">
               <input type="submit" class="btn btn_ok" id=check value="確定"> 
               <input type="button" class="btn btn_cancel" value="取消" onClick="$.fancybox.close()">
          </div>
     </form>
     <?php } elseif($_GET['table']==btrip){?>
               <form action="../Controller/approve.php" method="get">
               <h2>退件原因</h2>
               <table cellspacing="0">
                    <tr>
                    <th style="min-width:7.5%;width:7.5%">申請人</th>
                    <th style="min-width:20%;width:20%">公差時間</th>
                    <th style="min-width:7.5%;width:7.5%">開始時間</th>
                    <th style="min-width:7.5%;width:7.5%">結束時間</th>
                    <th style="min-width:4%;width:4%">時數</th>
                    <th style="min-width:7.5%;width:7.5%">公差地點</th>
                    </tr>
     
                    <?php if($_GET['who']==hr){ ?>

                    <tr>
                    <td><?php echo $_GET["name"]; ?></td>
                    <td><?php echo $_GET["startDate"]; ?>~<?php echo $_GET["endDate"];?></td>
                    <td><?php echo substr($_GET["startTime"],0,-3);?></td>
                    <td><?php echo substr($_GET["endTime"],0,-3);?></td>
                    <td><?php echo $_GET["totalTime"]?></td>
                    <td><?php echo $_GET["location"];?></td>
                    <input style="display:none" type="text" name="yesNO" value="<?php echo $_GET['yesNO']?>">
                    <input style="display:none" type="text" name="who" value="<?php echo $_GET['who']?>">
                    <input style="display:none" type="text" name="table" value="<?php echo $_GET['table']?>">
                    <input style="display:none" type="text" name="name" value="<?php echo $_GET["name"]; ?>">
                    </tr>
                    <?php }else{?>
                    <tr>
                    <td><?php echo $_GET["name"]; ?></td>
                    <td><?php echo $_GET["startDate"]; ?>~<?php echo $_GET["endDate"];?></td>
                    <td><?php echo substr($_GET["startTime"],0,-3);?></td>
                    <td><?php echo substr($_GET["endTime"],0,-3);?></td>
                    <td><?php echo $_GET["totalTime"]?></td>
                    <td><?php echo $_GET["location"];?></td>
                    <input style="display:none" type="text" name="yesNO" value="<?php echo $_GET['yesNO']?>">
                    <input style="display:none" type="text" name="who" value="<?php echo $_GET['who']?>">
                    <input style="display:none" type="text" name="table" value="<?php echo $_GET['table']?>">
                    <input style="display:none" type="text" name="name" value="<?php echo $_GET["name"]; ?>"> 
                    </tr>
                    <?php }?>

               </table>
          <textarea name="reason" id="reason" cols="30" rows="10"></textarea> 
          <input style="display:none" type="text" id="id" name="id" value="<?php echo $_GET['id']?>">
          <div class="sub_btn">
               <input type="submit" class="btn btn_ok" id=check value="確定"> 
               <input type="button" class="btn btn_cancel" value="取消" onClick="$.fancybox.close()">
          </div>
     </form>
     <?php } elseif($_GET['table']==overtime){?>
               <form action="../Controller/approve.php" method="get">
               <h2>退件原因</h2>
               <table cellspacing="0">
               <tr>
               <th style="min-width:9%;width:9%">申請人</th>
               <th style="min-width:11%;width:11%">加班日期</th>
               <th style="min-width:8%;width:8%">開始時間</th>
               <th style="min-width:8%;width:8%">結束時間</th>
               <th style="min-width:9%;width:9%">申請加班費</th>
               <th style="min-width:8%;width:8%">申請補修</th>
               </tr>
               <?php if($_GET['who']==hr){ ?>
               
               <tr>
               <td><?php echo $_GET["name"];?></td>
               <td><?php echo $_GET["startDate"]; ?></td>
               <td><?php echo substr($_GET["startTime"],0,-3); ?></td>
               <td><?php echo substr($_GET["endTime"],0,-3);?></td>
               <td><?php echo $_GET["hrs"];?></td>
               <td><?php echo $_GET["phrs"];?></td>
               <input style="display:none" type="text" name="yesNO" value="<?php echo $_GET['yesNO']?>">
                    <input style="display:none" type="text" name="who" value="<?php echo $_GET['who']?>">
                    <input style="display:none" type="text" name="table" value="<?php echo $_GET['table']?>">
                    <input style="display:none" type="text" name="name" value="<?php echo $_GET["name"]; ?>">
               </tr>
               <?php }else{?>
               <tr>
               <td><?php echo $_GET["name"]; ?></td>
               <td><?php echo $_GET["startDate"]; ?></td>
               <td><?php echo substr($_GET["startTime"],0,-3); ?></td>
               <td><?php echo substr($_GET["endTime"],0,-3);?></td>
               <td><?php echo $_GET["hrs"];?></td>
               <td><?php echo $_GET["phrs"];?></td>
               <input style="display:none" type="text" name="yesNO" value="<?php echo $_GET['yesNO']?>">
                    <input style="display:none" type="text" name="who" value="<?php echo $_GET['who']?>">
                    <input style="display:none" type="text" name="table" value="<?php echo $_GET['table']?>">
                    <input style="display:none" type="text" name="name" value="<?php echo $_GET["name"]; ?>"> 
               </tr>
               <?php }?>

               </table>
          <textarea name="reason" id="reason" cols="30" rows="10"></textarea> 
          <input style="display:none" type="text" id="id" name="id" value="<?php echo $_GET['id']?>">
          <div class="sub_btn">
               <input type="submit" class="btn btn_ok" id=check value="確定"> 
               <input type="button" class="btn btn_cancel" value="取消" onClick="$.fancybox.close()">
          </div>
     </form>
     <?php }?>
</div>