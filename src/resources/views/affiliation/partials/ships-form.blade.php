<form method="post" action="{{route('affiliation.add.ship.affiliation')}}">
  {{csrf_field()}}
  <input name="_method3" type="hidden" value="PATCH">
  <input type="hidden" name="seatgroup_id" value="{{ $seatgroup->id }}">
  <div class="form-group">
    <label for="ships">Available Ships</label>
    <select name="ship_ids[]" id="seat-group-ship-id" style="width: 100%" multiple required>
      @foreach($all_available_ships as $ship)
          <option value="{{ $ship->typeID }}">{{ $ship->typeName }}</option>
      @endforeach
    </select>
  </div>
  <div class="row">
    <div class="col-md-6"></div>
    <div class="form-group col-md-12">
      <button type="submit" class="btn btn-success btn-block">Add Ship</button>
    </div>
  </div>
</form>

@push('javascript')
  <script>
      $("#seat-group-ship-id").select2({
          placeholder: "{{ trans('web::seat.select_item_add') }}"
      });
  </script>
@endpush
