<div class="asdfasdf">
	<p class="judulataskecil">Berita Info</p>
</div>





<ul>
	<?php
			function limit_words($string, $word_limit){
                $words = explode(" ",$string);
                return implode(" ",array_splice($words,0,$word_limit));
            }
			foreach ($data->result_array() as $i) :
				$id=$i['no'];
				$judul=$i['judul'];
				$image=$i['photo'];
				$tanggal=$i['tanggal'];
		?>
	<li class="lkjh">
			<div class="container bungkuscontent">
				<div class="contentutama">
					<div class="img-content">
						<img src="<?php echo base_url().'upload/'.$image;?>" alt="" class="img-content" />
					</div>
					<div class="contentsub">
						<h4 class="judulcontent" style="overflow: hidden;white-space: nowrap;text-overflow: ellipsis;"><?php echo $judul;?></h4>
						<p class="tanggaldesain"><i class="fa fa-calendar" style="margin-right: 5px;"></i><?php echo $tanggal;?></p>
						<p><a href="<?php echo base_url().'index.php/Welcome_user/view2/'.$id;?>"> Selengkapnya ></a></p>
					</div>

				</div>
			</div>
		</li>
		<?php endforeach;?>
</ul>
