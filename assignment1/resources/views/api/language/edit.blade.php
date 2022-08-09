<form id="editLangForm" style="display: inline;">
	<div class="modal fade" role="dialog" tabindex="-1" id="showEditLangModal">
		<div class="modal-dialog modal-lg" role="document">

			<div class="modal-content">
				<div class="modal-header">
					<span>Edit Language Form</span>
					<button class="close" type="button" data-dismiss="modal">
						<span>&times;</span>
					</button>
				</div>

				<div class="modal-body">
					<div class="form-row">
                        <input type="hidden" name="id" id='id' >
						<div class="form-group col-12">
							<label for="lang_name">Language Name</label>
							<input type="text" class="form-control form-control form-control-sm rounded-0" name="lang_name" id="edit_lang_name">
							
						</div>

					</div>
				</div>

				<div class="modal-footer">
					<button type="submit" class="btn  btn-dark rounded-0">
						<i class="fa fa-edit"></i>
						Update
					</button>
				</div>
			</div>

		</div>
	</div>
</form>