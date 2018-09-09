<hr class="hr">
<div class="accreditations padtb20">
    <div class="row">
        @foreach($accreditation as $accred)
        <div class="col-sm-12 col-md-3 col-lg-3 centerme">
                <img class="accreditimg" src="{{ Voyager::image( $accred->image ) }}" alt="{{ $accred->name}}" title="{{ $accred->name }}">
        </div>
        @endforeach
    </div>
</div>