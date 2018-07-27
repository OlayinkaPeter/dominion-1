<div class="modal fade" id="modal-view-{{ $active_object->id }}">
	<div class="modal-dialog modal-l" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Viewing Surgery</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Close</span>
				</button>
			</div>
			<div class="modal-body">

				<div class="h4"><strong>Surgery Details</strong></div>
				<dl class="dl-horizontal">
					<dt>Case Title</dt>
					<dd class="mb5">{{ $active_object->visit->title }}</dd>
					<dt>Surgery Name</dt>
					<dd class="mb5">{{ $active_object->name }}</dd>
					<dt>Surgery Date</dt>
					<dd class="mb5">
						{{ is_null($element->surgery_date) ? '' : Carbon::createFromFormat('Y-m-d', $element->surgery_date)->toFormattedDateString() }}
					</dd>
					<dt>Complications</dt>
					<dd class="mb5">{{ $element->complications }}</dd>
				</dl>

				<div class="clearfix"></div>
				<br>

			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
</div>