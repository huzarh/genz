<?php    $select = mysqli_query($conn, "SELECT * FROM post_db WHERE title='Зэрлэг байгаль'");
         while($row = mysqli_fetch_assoc($select)){ ?>
<article class="box post post-excerpt">

							<!--  tiitle -->
							<header>
								<p><?php echo $row['titl']; ?></p>
								<h2><a href="add.php"><?php echo $row['title']; ?><!--admin & users--></a></h2>
							</header>
							<!-- unsar like -->
							<div class="info">
								<span class="date">
                                    <!-- <span class="month">Jul
                                        <span>y</span>
                                    </span>  -->
                                    <!-- <span class="day">14 </span> -->
									
									<span class="today"></span>
									<span class="year">, 2014</span>
                                </span>
                                    <ul class="stats">
                                        <li><a href="" class="icon fa-comment">0</a></li>
                                        <li class="like__btn"><span class="bb"><a class="god">&#x1F60C;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0</a></span></li>
                                        <li><a href="" class="icon brands fa-twitter">0</a></li>
                                        <li><a href="" class="icon brands fa-facebook-f">0</a></li>
                                    </ul>
							</div>

							<!-- zurag -->
							<a href=""class="image featured"><img style="border-radius:10px;" src="uploads/<?=$row['image_url']?>"/></a>

							<!-- UGVVLBervvvd start-->
							<p>
								<!-- end bichwervvvd -->
								<?php echo $row['text']; ?>
							</p>

							<p>
								<!-- dogol mur -->
nullllll						</p>
							<!-- ugvlbervvvdin tugsuguul end -->

							<section class="box text-style1">
						<div class="inner">
							<p>
								<strong>Эх сурвалж:</strong></br>Бид мэдээ мэдээллээ авсан эх сурвалжаа эндээ хавсаргаад явдаг байгаа.  <a href="https://unread.today/c/2225"><?php echo $row['eh_text']; ?></a> 
</br>	<strong>Зураг:</strong> <a href="https://housebuyers4u.co.uk/blog/move-over-millennials-gen-z-is-the-new-focus-for-the-property-market/"><?php echo $row['eh_img']; ?></a>
							</p>
						</div>
					</section>

</article>
<?php } ?>