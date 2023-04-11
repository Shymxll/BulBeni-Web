@foreach ($posts as  $post)

<div class="col">
    <div class="card shadow">
      <svg class="bd-placeholder-img card-img-top" width="100%" height="255" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
      <div class="card-body">
        <div class="card-content">
            <div class="media">
              <div class="media-left">
                <h3 class="title is-4">Title</h3>
              </div>
              <div class="media-right">
                <span class="tag is-success is-light">
                    @if ($post->worf)
                        Aranıyor
                     @else
                        Bulundu
                    @endif
                </span>

              </div>
              <div class="media-content">


              </div>
            </div>

            <div class="content">

              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Phasellus nec iaculis mauris.

              <br>
              <br>
              <div class="container border rounded px-2" id="mapCont" >
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3029.1511812148774!2d49.663058215030325!3d40.604487979343624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x403096890e23f225%3A0x4fa33033b486a8d!2zIlNpbXVycSIgxZ9hZGzEsXEgc2FyYXnEsQ!5e0!3m2!1sen!2saz!4v1681236100372!5m2!1sen!2saz" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
              <div class="media-end">
              <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                </div>
            </div>
          </div>
      </div>
    </div>
  </div>
@endforeach


<style>
    #mapCont{
        width: 100%;
    }
    #map{

    }
</style>
