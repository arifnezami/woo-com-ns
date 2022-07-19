<form  action="admin-post.php" method="post" id="settings_tm_ns"> 
	<input type="hidden" name="action" value="save_tm_ns_settings"> 
	<input type="hidden" name="current_tab_id" value="<?php echo esc_attr($current_tab_id); ?>">
	<?php 
	wp_nonce_field('nonce');
	// pr($options); die('done');

	?>
	<h2>
		Product/Inventory Sync Settings
	</h2>
	<div class="inventory-table-main">
		<div class="inv-table">
			<h3>
				Stock Management
			</h3>
			<table class="form-table">
				<tbody>
					<tr valign="top" class="">
						<th scope="row" class="titledesc">
							Enable Stock Sync
							<div class="tooltip dashicons-before dashicons-editor-help">
								<span class="tooltiptext">Update WooCommerce Product Stock Quantity from NetSuite</span>
							</div>
						</th>
						<td class="forminp forminp-checkbox">
							<input name="enableInventorySync" 
							<?php 
							if (isset($options['enableInventorySync']) && 'on' == $options['enableInventorySync']) {
								echo 'checked ';} 
							?>
								id="enableInventorySync" type="checkbox">                        
							</td>
						</tr>

						<tr valign="top" class="radio-input">
							<th scope="row" class="titledesc">
								<label for="inventoryDefaultLocation">Inventory Location </label>
								<div class="tooltip dashicons-before dashicons-editor-help">
									<span class="tooltiptext">If select inventory  from all location items default location will be used else inventory from all location will be used</span>
								</div>
							</th>
							<td class="forminp">
								<div class="radio">
									<label>
										<input type="radio" name="inventoryDefaultLocation" class="inventoryDefaultLocation"  value="1" 
										<?php 
										if (( isset($options['inventoryDefaultLocation']) && ( 1==$options['inventoryDefaultLocation'] ) )) {
											echo 'checked'; } elseif ( !isset($options['inventoryDefaultLocation'] ) ) {
												echo 'checked';
											} 
											?>
											> All Locations
										</label>
									</div>
								</td>
							</tr>
							<tr class="radio-input">
								<th></th>
								<td>
									<div class="radio">
										<label>
											<input type="radio" name="inventoryDefaultLocation" class="inventoryDefaultLocation"  value="2" 
											<?php 
											if (( isset($options['inventoryDefaultLocation']) && ( 2==$options['inventoryDefaultLocation'] ) )) {
												echo 'checked'; } elseif ( !isset($options['inventoryDefaultLocation'] ) ) {
													echo 'checked';
												} 
												?>
												> Default Locations
											</label>
										</div>
									</td>
								</tr>
								<tr class="radio-input">
									<th></th>
									<td>
										<div class="radio">
											<label>
												<input type="radio" name="inventoryDefaultLocation" class="inventoryDefaultLocation"  value="3" 
												<?php 
												if (( isset($options['inventoryDefaultLocation']) && ( 3 == $options['inventoryDefaultLocation'] ) )) {
													echo 'checked'; } 
												?>
													> Selected Locations
												</label>
											</div>
										</td>
									</tr>
									<tr valign="top" class="<?php echo ( !isset( $options['inventoryDefaultLocation'] ) || 'on' == $options['inventoryDefaultLocation'] || 3 != $options['inventoryDefaultLocation'] ) ? 'hidden' : ''; ?>">
									</tr>
									<tr valign="top" class="<?php echo ( !isset( $options['inventoryDefaultLocation'] ) || 'on' == $options['inventoryDefaultLocation'] || 3 != $options['inventoryDefaultLocation'] ) ? 'hidden' : ''; ?>">
										<th scope="row" class="titledesc">
										</th>
										<td class="forminp">
											<span class="location_forminp">
											<select id="netstuite_locations" name="netstuite_locations[]" multiple="multiple" >
												<?php
												$locations = get_option('netstuite_locations');
												if (!empty($locations)) {
													foreach ($locations as $loc_key => $loc_value) {
														if (isset($options['netstuite_locations']) && !empty($options['netstuite_locations']) && in_array($loc_key, $options['netstuite_locations'])) {

															?>
															<option selected="selected" value="<?php echo esc_attr($loc_key); ?>"><?php echo esc_attr($loc_value); ?></option>

															<?php } else { ?>
															<option value="<?php echo esc_attr($loc_key); ?>"><?php echo esc_attr($loc_value); ?></option>

															<?php
															}
													}
												}
												?>
											</select>
											<a href="#" title="get locations from netsuite" id="locationRefresh">
												<span class="loaderSpiner">
													<i class="glyphicon glyphicon-refresh" ></i>
												</span>
											</a>
										</span>
											

										</td>

										
										
									</tr>

									<tr valign="top">
										<th scope="row" class="titledesc">
											Override Manage Stock
											<div class="tooltip dashicons-before dashicons-editor-help">
												<span class="tooltiptext">If checked enable stock management at product level</span>
											</div>
										</th>
										<td class="forminp forminp-checkbox">
											<input name="overrideManageStock" 
											<?php 
											if (isset($options['overrideManageStock']) && 'on' == $options['overrideManageStock']) {
												echo 'checked ';} 
											?>
												id="overrideManageStock" type="checkbox">
												<label for="overrideManageStock">(Note : This will only work when inventory sync is enabled.)</label>                    
											</td>
										</tr>
										<tr valign="top">
										<th scope="row" class="titledesc">
											Update stock status
											<div class="tooltip dashicons-before dashicons-editor-help">
												<span class="tooltiptext">If checked  update stock status</span>
											</div>
										</th>
										<td class="forminp forminp-checkbox">
											<input value="yes" name="updateStockStatus" 
											<?php 
											if (!isset($options['updateStockStatus']) || 'yes' == $options['updateStockStatus']) {
												echo 'checked ';} 
											?>
												id="updateStockStatus" type="checkbox" >
												<label for="updateStockStatus"></label>                    
											</td>
										</tr>
										<tr valign="top">
											<th scope="row" class="titledesc">
												<label for="inventorySyncField">Inventory Quantity Field</label>

												<div class="tooltip dashicons-before dashicons-editor-help">
													<span class="tooltiptext">Set a value for get inventory from NetSuite (Qunatity on Hand or Quantity Available)</span>
												</div>
											</th>
											<td class="forminp forminp-select">
												<select name="inventorySyncField" id="inventorySyncField" style="" class="">
													<option value="">Choose the quantity field</option>
													<option 
													<?php 
													if (isset($options['inventorySyncField']) && 'quantityAvailable' == $options['inventorySyncField']) {
														echo 'selected ';} 
													?>
														value="quantityAvailable">Quantity Available</option>
														<option 
														<?php 
														if (isset($options['inventorySyncField']) && 'quantityOnHand' == $options['inventorySyncField']) {
															echo 'selected ';} 
														?>
															value="quantityOnHand">Quantity On Hand</option>
														</select>
													</td>
												</tr>


											</tbody>
										</table>
									</div>
									<div class="inv-table">
										<h3>
											Price Management
										</h3>
										<table class="form-table">
											<tbody>
												<tr valign="top" class="">
													<th scope="row" class="titledesc">
														Enable Price Sync
														<div class="tooltip dashicons-before dashicons-editor-help">
															<span class="tooltiptext">Update WooCommerce Product Price from NetSuite</span>
														</div>
													</th>
													<td class="forminp forminp-checkbox">
														<input name="enablePriceSync" 
														<?php 
														if (isset($options['enablePriceSync']) && 'on' == $options['enablePriceSync']) {
															echo 'checked ';} 
														?>
															id="enablePriceSync" type="checkbox">                        
														</td>
													</tr>
													<tr valign="top" class="">
														<th scope="row" class="titledesc">
															Price Level Name
															<div class="tooltip dashicons-before dashicons-editor-help">
																<span class="tooltiptext">Mention the price level of the product Example Base Price , Online Price</span>
															</div>
														</th>
														<td class="forminp forminp-select">
															<select name="price_level_name" id="price_level_name" style="" class="">
																<option 
																<?php 

																$price_levels = get_option('netstuite_price_levels');
																if (!empty($price_levels)) {


																	foreach ($price_levels as $key => $price_level) {
																		if (isset($options['price_level_name']) && !empty($options['price_level_name']) && $options['price_level_name'] ==  $price_level) {
																			?>
																			<option selected="selected" value="<?php echo esc_attr($price_level); ?>"><?php echo esc_attr($key); ?></option>

																			<?php } else { ?>
																			<option value="<?php echo esc_attr($price_level); ?>"><?php echo esc_attr($key); ?></option>

																			<?php
																			}
																	}

																}
																?>
															</select>
															<a href="#" title="get price level list from netsuite" id="priceLevelRefresh">
												<span class="loaderSpiner">
													<i class="glyphicon glyphicon-refresh" ></i>
												</span>
											</a>
														</td>

													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="inventory-table-main">
										<div class="inv-table-last well">
											<h3>Common Settings</h3>

											<table class="form-table form-table-last">
												<tbody>
													<tr valign="top" class="">
														<th scope="row" class="titledesc">
															Map Product SKU
															<div class="tooltip dashicons-before dashicons-editor-help">
																<span class="tooltiptext">Matches Woo SKU on Netsuite with the selected field for inventory search</span>
															</div>
														</th>
														<td class="forminp forminp-select">
															<select id="sku_mapping_field" name="sku_mapping_field">
																<option value="">Choose the matching field</option>
																<option value="itemId" 
																<?php 


																echo isset($options['sku_mapping_field']) && 'itemId' == $options['sku_mapping_field'] ? ' selected="selected"' : ''; 


																?>
																 >Item Name/Number</option>
																<option value="upcCode" <?php echo isset($options['sku_mapping_field']) && 'upcCode' == $options['sku_mapping_field'] ? ' selected="selected"' : ''; ?> >UPC Code</option>
																<option value="displayName" <?php echo isset($options['sku_mapping_field']) && 'displayName' == $options['sku_mapping_field'] ? ' selected="selected"' : ''; ?> >Display Name/Code</option>
																<option value="vendorName" <?php echo isset($options['sku_mapping_field']) && 'vendorName' == $options['sku_mapping_field'] ? ' selected="selected"' : ''; ?> >Vendor Name/Code</option>
																<option value="customFieldList" <?php echo isset($options['sku_mapping_field']) && 'customFieldList' == $options['sku_mapping_field'] ? ' selected="selected"' : ''; ?> >Custom Field</option>
															</select>                       
														</td>
													</tr>

													<tr valign="top" class="<?php echo ( isset( $options['sku_mapping_field'] ) && 'customFieldList' == $options['sku_mapping_field'] ) ? '' : 'hidden'; ?>">
														<th scope="row" class="titledesc" >
														</th>
														<td class="forminp forminp-select">
															<input id="sku_mapping_custom_field" name="sku_mapping_custom_field"  value="<?php isset($options['sku_mapping_custom_field']) ? esc_attr_e(trim($options['sku_mapping_custom_field'])) :  ''; ?>">
														</td>
													</tr>
													<tr valign="top">
														<th scope="row" class="titledesc">
															<label for="inventorySyncFrequency">Inventory and(or) Price Sync Frequency</label>

															<div class="tooltip dashicons-before dashicons-editor-help">
																<span class="tooltiptext">Set a frequency for inventory and(or) price update from NetSuite</span>
															</div>
														</th>
														<td class="forminp forminp-select">
															<select name="inventorySyncFrequency" id="inventorySyncFrequency" style="" class="">
																<?php 
																foreach ($inventory_sync_frequencies as $inventory_sync_frequency_id=>$inventory_sync_frequency_name) { 
																	?>
																	<option 
																	<?php 
																	if (isset($options['inventorySyncFrequency']) && $options['inventorySyncFrequency'] == $inventory_sync_frequency_id) {
																		echo 'selected ';} 
																	?>
																		value="<?php echo esc_attr($inventory_sync_frequency_id); ?>"><?php echo esc_attr($inventory_sync_frequency_name); ?> </option>
																		<?php } ?>
																	</select>
																</td>
															</tr>
															<?php
															/**
																	* Inventory setting hook.
																	*
																	* @since 1.0.0

																**/
															do_action('tm_ns_after_inventory_settings');
															?>
														</tbody>
													</table>
												</div>
											</div>
												<div class="inv-table-last">
												<table>
												<tbody>
															
															<tr valign="top">
																<th scope="row" class="titledesc">
																	<input type="submit" class="button-primary" name="save_post" value="Save Settings" /> 
																</th>
															</tr>
															<?php 
															if (isset($options['enableInventorySync']) && 'on' == $options['enableInventorySync'] || ( isset($options['enablePriceSync']) && 'on' == $options['enablePriceSync'] )) {

																?>
																<tr>
																	<th scope="row" class="titledesc">
																		<a class="button-primary manual-update-inventory">Manual update inventory and(or) price</a> <div class="inventory-loader"></div>
																	</th>
																</tr>
																<?php } ?>
															</tbody>
														</table>
													</div>
												<div id="inventoy_progress">

													<span id="right_progress" style="display: none">
														<div class="progress_processed">
															<span>Processed <span class="processed_count">0</span> of <span id="of">0</span> records</span>
														</div>
														<div class="progress_details">


															<span class="progress_details_item updated_count" style="">
																Updated <span class="updated_records_count">0</span>
															</span>
															<span class="progress_details_item skipped_count">
																Skipped <span class="skipped_records_count">0</span>
															</span>
														</div>
													</span>
												</div>
												<fieldset class="inventory-logs">
													<legend class="log-head">Log</legend>
													<div class="log-list">
													</div>
												</fieldset>
											</form>
