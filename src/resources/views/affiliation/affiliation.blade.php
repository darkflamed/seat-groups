<h3>Available for whom</h3>
<p>Select the affiliation to which the Group is bound. This means any main_character (and its user group) which is
  not part of a selected affiliation will not be part of this Group.</p>

<div class="nav-tabs-custom">
  <ul class="nav nav-tabs">
    <li><a href="#alliance-filter" data-toggle="tab">Alliance Filter</a></li>
    <li class="active"><a href="#corporation-filter" data-toggle="tab">Corporation Filter</a></li>
    <li><a href="#title-filter" data-toggle="tab">Corporation Title Filter</a></li>
    <li><a href="#skills-filter" data-toggle="tab">Skills Filter</a></li>
    <li><a href="#ships-filter" data-toggle="tab">Ships Filter</a></li>
  </ul>
  <div class="tab-content">

    <div class="tab-pane" id="alliance-filter">
      @include('seatgroups::affiliation.partials.alliance-form')
    </div>

    <div class="tab-pane active" id="corporation-filter">
      @include('seatgroups::affiliation.partials.corporation-form')
    </div>
    <!-- /.tab-pane -->
    <div class="tab-pane" id="title-filter">
      @include('seatgroups::affiliation.partials.corporation-title-form')
    </div>

    <div class="tab-pane" id="skills-filter">
      @include('seatgroups::affiliation.partials.skills-form')
    </div>

    <div class="tab-pane" id="ships-filter">
      @include('seatgroups::affiliation.partials.ships-form')
    </div>

  @include('seatgroups::affiliation.partials.current-affiliations')
    <!-- /.tab-pane -->
  </div>
  <!-- /.tab-content -->
</div>