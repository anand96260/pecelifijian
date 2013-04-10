		
		<script type="text/javascript" src="search.js"></script>
		<script type="text/javascript">
		window.onload = function() {
			dynamicSelect("chapter", "URL");
		}
		</script> 
		
		<?php 
/*double $location=0;
function redirect_to($location = null)
{
    if ($location != null) {
        redirect_to("$location");
        exit;

    }

} */
function redirect_to($URL)
{
echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
}
if(isset($_POST['vers']))
{
$vers=$_POST['vers'];

//default
if($vers>408 or $vers<1)
{$prefix="book1chapters.php";$location=$prefix;redirect_to("$location");}

//b1chaper1
if($vers<=14 and $vers>=1)
{
$prefix="book1chapter1.php#topic";
$location=$prefix.$vers;
redirect_to("$location");
}
//b1chaper2
if($vers>=15 and $vers<=23)
{$prefix="book1chapter2.php#topic";$location=$prefix.$vers;redirect_to("$location");}

//b1chaper3
if($vers>=24 and $vers<=33)
{$prefix="book1chapter3.php#topic";$location=$prefix.$vers;redirect_to("$location");}

//b1chaper4
if($vers>=34 and $vers<=49)
{$prefix="book1chapter4.php#topic";$location=$prefix.$vers;redirect_to("$location");}

//b1chaper5
if($vers>=50 and $vers<=55)
{$prefix="book1chapter5.php#topic";$location=$prefix.$vers;redirect_to("$location");}

//b1chaper6
if($vers>=56 and $vers<=84)
{$prefix="book1chapter6.php#topic";$location=$prefix.$vers;redirect_to("$location");}

//b1chaper7
if($vers>=85 and $vers<=99)
{$prefix="book1chapter7.php#topic";$location=$prefix.$vers;redirect_to("$location");}

//b1chaper8
if($vers>=100 and $vers<=104)
{$prefix="book1chapter8.php#topic";$location=$prefix.$vers;redirect_to("$location");}

//b1chaper9
if($vers>=105 and $vers<=125)
{$prefix="book1chapter9.php#topic";$location=$prefix.$vers;redirect_to("$location");}

//b1chaper10
if($vers>=126 and $vers<=148)
{$prefix="book1chapter10.php#topic";$location=$prefix.$vers;redirect_to("$location");}

//b1chaper11
if($vers>=149 and $vers<=150)
{$prefix="book1chapter11.php#topic";$location=$prefix.$vers;redirect_to("$location");}

//b1chaper12
if($vers>=151 and $vers<=175)
{$prefix="book1chapter12.php#topic";$location=$prefix.$vers;redirect_to("$location");}

//b1chaper13
if($vers>=176 and $vers<=192)
{$prefix="book1chapter13.php#topic";$location=$prefix.$vers;redirect_to("$location");}

//b1chaper14
if($vers>=193 and $vers<=201)
{$prefix="book1chapter14.php#topic";$location=$prefix.$vers;redirect_to("$location");}

//b1chaper15
if($vers>=202 and $vers<=222)
{$prefix="book1chapter15.php#topic";$location=$prefix.$vers;redirect_to("$location");}

//b1chaper16
if($vers>=223 and $vers<=233)
{$prefix="book1chapter16.php#topic";$location=$prefix.$vers;redirect_to("$location");}

//b1chaper17
if($vers>=234 and $vers<=262)
{$prefix="book1chapter17.php#topic";$location=$prefix.$vers;redirect_to("$location");}

//b1chaper18
if($vers>=263 and $vers<=275)
{$prefix="book1chapter18.php#topic";$location=$prefix.$vers;redirect_to("$location");}

//b1chaper19
if($vers>=276 and $vers<=286)
{$prefix="book1chapter19.php#topic";$location=$prefix.$vers;redirect_to("$location");}

//b1chaper20
if($vers>=287 and $vers<=292)
{$prefix="book1chapter20.php#topic";$location=$prefix.$vers;redirect_to("$location");}

//b1chaper21
if($vers>=293 and $vers<=297)
{$prefix="book1chapter21.php#topic";$location=$prefix.$vers;redirect_to("$location");}

//b1chaper22
if($vers>=304 and $vers<=306)
{$prefix="book1chapter22.php#topic";$location=$prefix.$vers;redirect_to("$location");}

//b1chaper23
if($vers>=307 and $vers<=313)
{$prefix="book1chapter23.php#topic";$location=$prefix.$vers;redirect_to("$location");}

//b1chaper24
if($vers>=314 and $vers<=317)
{$prefix="book1chapter24.php#topic";$location=$prefix.$vers;redirect_to("$location");}

//b1chaper25
if($vers>=318 and $vers<=331)
{$prefix="book1chapter25.php#topic";$location=$prefix.$vers;redirect_to("$location");}

//b1chaper26
if($vers>=332 and $vers<=335)
{$prefix="book1chapter26.php#topic";$location=$prefix.$vers;redirect_to("$location");}

//b1chaper27
if($vers>=336 and $vers<=339)
{$prefix="book1chapter27.php#topic";$location=$prefix.$vers;redirect_to("$location");}

//b1chaper28
if($vers>=340 and $vers<=343)
{$prefix="book1chapter28.php#topic";$location=$prefix.$vers;redirect_to("$location");}

//b1chaper29
if($vers>=344 and $vers<=349)
{$prefix="book1chapter29.php#topic";$location=$prefix.$vers;redirect_to("$location");}

//b1chaper30
if($vers>=350 and $vers<=361)
{$prefix="book1chapter30.php#topic";$location=$prefix.$vers;redirect_to("$location");}

//b1chaper31
if($vers>=362 and $vers<=408)
{$prefix="book1chapter31.php#topic";$location=$prefix.$vers;redirect_to("$location");}



}
//b1chaper1
		?>

<?/*
				<select id="chapter" name="chapter">
					<option value="select">Select a Chapter...</option>
					<option value="Chapter1">Na Nona Lagilagi na Kalou kei na Nona Vakarokorokotaki</option>
					<option value="Chapter2">Na Nona Lako Mai ki Vuravura</option>
					<option value="Chapter3">Na Nona Bula Vakatamata kei na Nona i Vakavuvuli</option>
				</select>
			
<select name="URL" id="URL" onchange="window.location.href=this.form.URL.options[this.form.URL.selectedIndex].value">
<option selected="selected">Choose a topic..</option>

<!-- Chapter1 -->

	<? for($u=1;$u<15;$u++){?>
		<option class="Chapter1" value="<?='book1chapter1.php#topic'.$u?>"><?=$u?></option>
    <? } 	
</select>
*/?>
