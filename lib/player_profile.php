<?php
function getPPFormat() {
  $fmt =  "Lchecksum/";
  $fmt .= "a64name/";
  $fmt .= "a32last_name/";
  $fmt .= "Lgender/";
  $fmt .= "Lrace/";
  $fmt .= "Lclass/";
  $fmt .= "Lunknown0112/";
  $fmt .= "Llevel/";
  $fmt .= "Lbind1_zone/";
  $fmt .= "fbind1_x/";
  $fmt .= "fbind1_y/";
  $fmt .= "fbind1_z/";
  $fmt .= "fbind1_h/";
  $fmt .= "Lbind2_zone/";
  $fmt .= "fbind2_x/";
  $fmt .= "fbind2_y/";
  $fmt .= "fbind2_z/";
  $fmt .= "fbind2_h/";
  $fmt .= "Lbind3_zone/";
  $fmt .= "fbind3_x/";
  $fmt .= "fbind3_y/";
  $fmt .= "fbind3_z/";
  $fmt .= "fbind3_h/";
  $fmt .= "Lbind4_zone/";
  $fmt .= "fbind4_x/";
  $fmt .= "fbind4_y/";
  $fmt .= "fbind4_z/";
  $fmt .= "fbind4_h/";
  $fmt .= "Lbind5_zone/";
  $fmt .= "fbind5_x/";
  $fmt .= "fbind5_y/";
  $fmt .= "fbind5_z/";
  $fmt .= "fbind5_h/";
  $fmt .= "Ldeity/";
  $fmt .= "Lguild_id/";
  $fmt .= "Lbirthday/";
  $fmt .= "Llastzone/"; //Last character save
  $fmt .= "Ltimeplayed/";
  $fmt .= "cpvp/";
  $fmt .= "clevel2/";
  $fmt .= "canon/";
  $fmt .= "cgm/";
  $fmt .= "cguildrank/";
  $fmt .= "cguildbanker/";
  $fmt .= "c6unknown0246/";
  $fmt .= "Ldrunk/";
  $fmt .= "L9spellslotrefresh/";
  $fmt .= "Labilityslotrefresh/";
  $fmt .= "chaircolor/";
  $fmt .= "cbeardcolor/";
  $fmt .= "clefteye/";
  $fmt .= "crighteye/";
  $fmt .= "chairstyle/";
  $fmt .= "cbeard/";
  $fmt .= "cability_time_seconds/";
  $fmt .= "cability_number/";
  $fmt .= "cability_time_minutes/";
  $fmt .= "cability_time_hours/";
  $fmt .= "c6unknown0306/";
  $fmt .= "L9item_material/";
  $fmt .= "c44unknown0348/";
  $fmt .= "citemtint1_blue/";
  $fmt .= "citemtint1_green/";
  $fmt .= "citemtint1_red/";
  $fmt .= "citemtint1_use_tint/";
  $fmt .= "citemtint2_blue/";
  $fmt .= "citemtint2_green/";
  $fmt .= "citemtint2_red/";
  $fmt .= "citemtint2_use_tint/";
  $fmt .= "citemtint3_blue/";
  $fmt .= "citemtint3_green/";
  $fmt .= "citemtint3_red/";
  $fmt .= "citemtint3_use_tint/";
  $fmt .= "citemtint4_blue/";
  $fmt .= "citemtint4_green/";
  $fmt .= "citemtint4_red/";
  $fmt .= "citemtint4_use_tint/";
  $fmt .= "citemtint5_blue/";
  $fmt .= "citemtint5_green/";
  $fmt .= "citemtint5_red/";
  $fmt .= "citemtint5_use_tint/";
  $fmt .= "citemtint6_blue/";
  $fmt .= "citemtint6_green/";
  $fmt .= "citemtint6_red/";
  $fmt .= "citemtint6_use_tint/";
  $fmt .= "citemtint7_blue/";
  $fmt .= "citemtint7_green/";
  $fmt .= "citemtint7_red/";
  $fmt .= "citemtint7_use_tint/";
  $fmt .= "citemtint8_blue/";
  $fmt .= "citemtint8_green/";
  $fmt .= "citemtint8_red/";
  $fmt .= "citemtint8_use_tint/";
  $fmt .= "citemtint9_blue/";
  $fmt .= "citemtint9_green/";
  $fmt .= "citemtint9_red/";
  $fmt .= "citemtint9_use_tint/";

  $maxaa = 240;
  for($x = 0; $x < $maxaa; $x++) {
    $fmt .= "Laa".($x+1)."_id/";
    $fmt .= "Laa".($x+1)."_value/";
  }

  $fmt .= "funknown2384/";
  $fmt .= "a32servername/";
  $fmt .= "a32title/";
  $fmt .= "a32suffix/";
  $fmt .= "Lguildid2/";
  $fmt .= "Lexp/";
  $fmt .= "Lunknown2492/";
  $fmt .= "Lpractice/";
  $fmt .= "Lmana/";
  $fmt .= "Lhp/";
  $fmt .= "Lunknown2508/";
  $fmt .= "LSTR/";
  $fmt .= "LSTA/";
  $fmt .= "LCHA/";
  $fmt .= "LDEX/";
  $fmt .= "L_INT/";
  $fmt .= "LAGI/";
  $fmt .= "LWIS/";
  $fmt .= "cface/";
  $fmt .= "c47unknown2541/";
  $fmt .= "c28languages/";
  $fmt .= "c4unknown2616/";
  $fmt .= "l480spellbook/";
  $fmt .= "c128unknown4540/";
  $fmt .= "l9mem_spells/";
  $fmt .= "c32unknown4704/";
  $fmt .= "fy/";
  $fmt .= "fx/";
  $fmt .= "fz/";
  $fmt .= "fheading/";
  $fmt .= "c4unknown4752/";
  $fmt .= "lplatinum/";
  $fmt .= "lgold/";
  $fmt .= "lsilver/";
  $fmt .= "lcopper/";
  $fmt .= "lplatinum_bank/";
  $fmt .= "lgold_bank/";
  $fmt .= "lsilver_bank/";
  $fmt .= "lcopper_bank/";
  $fmt .= "lplatinum_hand/";
  $fmt .= "lgold_hand/";
  $fmt .= "lsilver_hand/";
  $fmt .= "lcopper_hand/";
  $fmt .= "lplatinum_shared/";
  $fmt .= "c24unknown4808/";
  $fmt .= "L75skills/";
  $fmt .= "c284unknown5132/";
  $fmt .= "lpvp2/";
  $fmt .= "lunknown5420/";
  $fmt .= "lpvptype/";
  $fmt .= "lunknown5428/";
  $fmt .= "Lability_down/";
  $fmt .= "c8unknown5436/";
  $fmt .= "Lautosplit/";
  $fmt .= "c8unknown5448/";
  $fmt .= "lzone_change_count/";
  $fmt .= "c16unknown5460/";
  $fmt .= "Ldrakkin_heritage/";
  $fmt .= "Ldrakkin_tattoo/";
  $fmt .= "Ldrakkin_details/";
  $fmt .= "lexpansions/";
  $fmt .= "ltoxicity/";
  $fmt .= "c16unknown5496/";
  $fmt .= "lhunger/";
  $fmt .= "lthirst/";
  $fmt .= "lability_up/";
  $fmt .= "c16unknown5524/";
  $fmt .= "Szone_id/";
  $fmt .= "Sinstanceid/";

  $maxbuff = 25;
  for($x = 0;$x < $maxbuff;$x++) {
    $fmt .= "ceffect".($x+1)."slotid/";
    $fmt .= "ceffect".($x+1)."level/";
    $fmt .= "ceffect".($x+1)."bard_mod/";
    $fmt .= "ceffect".($x+1)."effect/";
    $fmt .= "leffect".($x+1)."spellid/";
    $fmt .= "leffect".($x+1)."duration/";
    $fmt .= "seffect".($x+1)."ds_remaining/";
    $fmt .= "ceffect".($x+1)."persistent_buff/";
    $fmt .= "ceffect".($x+1)."reserved/";
    $fmt .= "leffect".($x+1)."playerid/";
  }

  $fmt .= "a64groupmember1/";
  $fmt .= "a64groupmember2/";
  $fmt .= "a64groupmember3/";
  $fmt .= "a64groupmember4/";
  $fmt .= "a64groupmember5/";
  $fmt .= "a64groupmember6/";
  $fmt .= "c656unknown6428/";
  $fmt .= "Lentityid/";
  $fmt .= "Lleader_aa_active/";
  $fmt .= "Lunknown7092/";
  $fmt .= "lguk_points/";
  $fmt .= "lmir_points/";
  $fmt .= "lmmc_points/";
  $fmt .= "lruj_points/";
  $fmt .= "ltak_points/";
  $fmt .= "lavail_points/";
  $fmt .= "lguk_wins/";
  $fmt .= "lmir_wins/";
  $fmt .= "lmmc_wins/";
  $fmt .= "lruj_wins/";
  $fmt .= "ltak_wins/";
  $fmt .= "lguk_losses/";
  $fmt .= "lmir_losses/";
  $fmt .= "lmmc_losses/";
  $fmt .= "lruj_losses/";
  $fmt .= "ltak_losses/";
  $fmt .= "c72unkown7160/";
  $fmt .= "Ltribute_timer/";
  $fmt .= "Lshowhelm/";
  $fmt .= "Ltribute_total/";
  $fmt .= "Lunknown7244/";
  $fmt .= "Ltribute_points/";
  $fmt .= "Lunknown7252/";
  $fmt .= "Ltribute_active/";
  $fmt .= "Ltribute1/";
  $fmt .= "Ltribute1tier/";
  $fmt .= "Ltribute2/";
  $fmt .= "Ltribute2tier/";
  $fmt .= "Ltribute3/";
  $fmt .= "Ltribute3tier/";
  $fmt .= "Ltribute4/";
  $fmt .= "Ltribute4tier/";
  $fmt .= "Ltribute5/";
  $fmt .= "Ltribute5tier/";
  $fmt .= "L100disciplines/";
  $fmt .= "L20recast_timer/";
  $fmt .= "c160unknown7780/";
  $fmt .= "Lendurance/";
  $fmt .= "Lgroup_exp/";
  $fmt .= "Lraid_exp/";
  $fmt .= "Lgroup_points/";
  $fmt .= "Lraid_points/";
  $fmt .= "L32leader_ability/";
  $fmt .= "c132unknown8088/";
  $fmt .= "Lair/";  //Client side data
  $fmt .= "Lpvp_kills/";
  $fmt .= "Lpvp_deaths/";
  $fmt .= "Lpvp_points/";
  $fmt .= "Lpvp_total/";
  $fmt .= "Lpvp_killstreak_max/";
  $fmt .= "Lpvp_deathstreak_max/";
  $fmt .= "Lpvp_killstreak_now/";
  $fmt .= "a64pvplastkill_name/";
  $fmt .= "Lpvplastkill_level/";
  $fmt .= "Lpvplastkill_race/";
  $fmt .= "Lpvplastkill_class/";
  $fmt .= "Lpvplastkill_zone/";
  $fmt .= "Lpvplastkill_time/";
  $fmt .= "Lpvplastkill_points/";
  $fmt .= "a64pvplastdeath_name/";
  $fmt .= "Lpvplastdeath_level/";
  $fmt .= "Lpvplastdeath_race/";
  $fmt .= "Lpvplastdeath_class/";
  $fmt .= "Lpvplastdeath_zone/";
  $fmt .= "Lpvplastdeath_time/";
  $fmt .= "Lpvplastdeath_points/";
  $fmt .= "Lpvp_kills_today/";

  for($x = 0;$x < 50;$x++) {
    $fmt .= "a64pvprecentkill".($x+1)."_name/";
    $fmt .= "Lpvprecentkill".($x+1)."_level/";
    $fmt .= "Lpvprecentkill".($x+1)."_race/";
    $fmt .= "Lpvprecentkill".($x+1)."_class/";
    $fmt .= "Lpvprecentkill".($x+1)."_zone/";
    $fmt .= "Lpvprecentkill".($x+1)."_time/";
    $fmt .= "Lpvprecentkill".($x+1)."_points/";
  }

  $fmt .= "Laa_spent/";
  $fmt .= "Laa_exp/";
  $fmt .= "Laa_points/";
  $fmt .= "c36unknown12844/";

  //Bandolier
  for($x = 0;$x < 4;$x++) {
    $fmt .= "a32bandolier".($x+1)."_name/";
    for($y = 0;$y < 4;$y++) {
      $fmt .= "Lbandolier".($x+1)."_item".($y+1)."_id/";
      $fmt .= "Lbandolier".($x+1)."_item".($y+1)."_icon/";
      $fmt .= "a64bandolier".($x+1)."_item".($y+1)."_name/";
    }
  }

  $fmt .= "c4506unknown14160/";

  //Suspended minion
  $fmt .= "Ssm_spellid/";
  $fmt .= "Lsm_hp/";
  $fmt .= "Lsm_mana/";
  for($x = 0;$x < $maxbuff;$x++) {
    $fmt .= "csmbuffs".($x+1)."slotid/";
    $fmt .= "csmbuffs".($x+1)."level/";
    $fmt .= "csmbuffs".($x+1)."bard_mod/";
    $fmt .= "csmbuffs".($x+1)."effect/";
    $fmt .= "lsmbuffs".($x+1)."spellid/";
    $fmt .= "lsmbuffs".($x+1)."duration/";
    $fmt .= "ssmbuffs".($x+1)."ds_remaining/";
    $fmt .= "csmbuffs".($x+1)."persistent_buff/";
    $fmt .= "csmbuffs".($x+1)."reserved/";
    $fmt .= "lsmbuffs".($x+1)."playerid/";
  }
  $fmt .= "L9sm_item/";
  $fmt .= "a64sm_name/";

  $fmt .= "Ltimeonaccount/";

  //potion belt
  for($x = 0;$x < 4;$x++) {
    $fmt .= "Lpotion".($x+1)."_item_id/";
    $fmt .= "Lpotion".($x+1)."_icon/";
    $fmt .= "a64potion".($x+1)."_name/";
  }

  $fmt .= "c8unknown19568/";
  $fmt .= "Lradiant_crystals/";
  $fmt .= "Lradiant_total/";
  $fmt .= "Lebon_crystals/";
  $fmt .= "Lebon_total/";
  $fmt .= "cgroup_consent/"; //Not working right. Client side only?
  $fmt .= "craid_consent/"; //Not working right. Client side only?
  $fmt .= "cguild_consent/"; //Not working right. Client side only?
  $fmt .= "c5unknown19595/";
  $fmt .= "Lresttimer";

  return $fmt;
}
?>
