<ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
								<?php

                					$ambil_data = $this->db->query('SELECT * FROM crm ORDER BY tgl ');
               	 						$hasil_ambil_data = $ambil_data->result_array();
                						$tglsekarang = date('Y-m-d');

                				foreach ($hasil_ambil_data as $item) {
                  
				                  if ($item['tgl'] != $tglsekarang){
				                    	?>
									<a href="<?php echo base_url() . 'admin/produk/detail?id_produk='.$item['id'] ?>">	
										<li>
											<a href="javascript:;">
												<span class="time"><?php echo $item['nama_project'];?>span>
													<span class="details">
														<span class="label label-sm label-icon label-success">
															<i class="fa fa-plus"></i>
														</span>
														New user registered. </span>
											</a>
										</li>
									</a>
				                     <?php
				                     }
				                     	}?>
				               </ul>