<?php
$ale_background = ale_get_option('background');
$ale_headerfont = ale_get_option('headerfont');
$ale_mainfont = ale_get_option('mainfont');
$ale_thirdfont = ale_get_option('thirdfont');
$ale_font = ale_get_option('bodystyle');
$ale_h1 = ale_get_option('h1sty');
$ale_h2 = ale_get_option('h2sty');
$ale_h3 = ale_get_option('h3sty');
$ale_h4 = ale_get_option('h4sty');
$ale_h5 = ale_get_option('h5sty');
$ale_h6 = ale_get_option('h6sty');
?>
<?php
    if(ale_get_option('headerfontex')){ $headerfontex = ":".ale_get_option('headerfontex'); } else {$headerfontex =""; }
    if(ale_get_option('mainfontex')){ $mainfontex = ":".ale_get_option('mainfontex'); } else {$mainfontex = "";}
    if(ale_get_option('thirdfontex')){ $thirdfontex = ":".ale_get_option('thirdfontex'); } else {$thirdfontex = "";}
    if(ale_get_option('headerfont')){ echo "<link href='http://fonts.googleapis.com/css?family=".ale_get_option('headerfont').$headerfontex."|".ale_get_option('mainfont').$mainfontex."|".ale_get_option('thirdfont').$thirdfontex."' rel='stylesheet' type='text/css'>"; }
?>
<style type='text/css'>
    body {
        <?php
        if($ale_font['size']){ echo "font-size:".$ale_font['size'].";"; };
        if($ale_font['style']){ echo "font-style:".$ale_font['style'].";"; };
        if($ale_font['color']){ echo "color:".$ale_font['color'].";"; };
        if($ale_font['face']){ $fontfamily =  str_replace ('+',' ',$ale_font['face']); echo "font-family:".$fontfamily.";"; };
        if($ale_background['color']){ echo "background-color:".$ale_background['color'].";"; }
        if($ale_background['image']){ echo "background-image: url(".$ale_background['image'].");"; }
        if($ale_background['repeat']){ echo "background-repeat:".$ale_background['repeat'].";"; }
        if($ale_background['position']){ echo "background-position:".$ale_background['position'].";"; }
        if($ale_background['attachment']){ echo "background-attachment:".$ale_background['attachment'].";"; }
        ?>
    }
    h1 {
        <?php
        if($ale_h1['size']){ echo "font-size:".$ale_h1['size'].";"; };
        if($ale_h1['style']){ echo "font-style:".$ale_h1['style'].";"; };
        if($ale_h1['color']){ echo "color:".$ale_h1['color'].";"; };
        if($ale_h1['face']){ $h1family =  str_replace ('+',' ',$ale_h1['face']); echo "font-family:".$h1family.";"; };
        ?>
    }
    h2 {
        <?php
        if($ale_h2['size']){ echo "font-size:".$ale_h2['size'].";"; };
        if($ale_h2['style']){ echo "font-style:".$ale_h2['style'].";"; };
        if($ale_h2['color']){ echo "color:".$ale_h2['color'].";"; };
        if($ale_h2['face']){ $h2family =  str_replace ('+',' ',$ale_h2['face']); echo "font-family:".$h2family.";"; };
        ?>
    }
    h3 {
        <?php
        if($ale_h3['size']){ echo "font-size:".$ale_h3['size'].";"; };
        if($ale_h3['style']){ echo "font-style:".$ale_h3['style'].";"; };
        if($ale_h3['color']){ echo "color:".$ale_h3['color'].";"; };
        if($ale_h3['face']){ $h3family =  str_replace ('+',' ',$ale_h3['face']); echo "font-family:".$h3family.";"; };
        ?>
    }
    h4 {
        <?php
        if($ale_h4['size']){ echo "font-size:".$ale_h4['size'].";"; };
        if($ale_h4['style']){ echo "font-style:".$ale_h4['style'].";"; };
        if($ale_h4['color']){ echo "color:".$ale_h4['color'].";"; };
        if($ale_h4['face']){ $h4family =  str_replace ('+',' ',$ale_h4['face']); echo "font-family:".$h4family.";"; };
        ?>
    }
    h5 {
        <?php
        if($ale_h5['size']){ echo "font-size:".$ale_h5['size'].";"; };
        if($ale_h5['style']){ echo "font-style:".$ale_h5['style'].";"; };
        if($ale_h5['color']){ echo "color:".$ale_h5['color'].";"; };
        if($ale_h5['face']){ $h5family =  str_replace ('+',' ',$ale_h5['face']); echo "font-family:".$h5family.";"; };
        ?>
    }
    h6 {
        <?php
        if($ale_h6['size']){ echo "font-size:".$ale_h6['size'].";"; };
        if($ale_h6['style']){ echo "font-style:".$ale_h6['style'].";"; };
        if($ale_h6['color']){ echo "color:".$ale_h6['color'].";"; };
        if($ale_h6['face']){ $h6family =  str_replace ('+',' ',$ale_h6['face']); echo "font-family:".$h6family.";"; };
        ?>
    }

    .font_one {
    <?php if($ale_headerfont){ $headerfontname =  str_replace ('+',' ',$ale_headerfont); echo "font-family:".$headerfontname.";"; } ?>
    }
    .font_two,.ale_about_page .our_people .top_titles .center_info h3.people_title {
        <?php if($ale_mainfont){ $mainfontname =  str_replace ('+',' ',$ale_mainfont); echo "font-family:".$mainfontname.";"; } ?>
    }
    .font_three {
    <?php if($ale_thirdfont){ $thirdfontname =  str_replace ('+',' ',$ale_thirdfont); echo "font-family:".$thirdfontname.";"; } ?>
    }


</style>