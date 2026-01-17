<template>
 <div 
  :class="classType"
  class="mb-4 mb-1 mt-1 pl-1 pb-1 px-0">
  <div class="card shadow-none property-card   mt-0 rounded border-1">
    <!-- Image -->
    <div class="position-relative">
       <div
      class="col-md-12 small aprts position-relative p-0"
      itemscope
      itemtype="https://schema.org/ImageGallery"
    >
      <div class="owl-carousel owl-theme">

        <div
          v-if="room.image"
          class="item  rounded-top"
          itemprop="photo"
          :class="{ index: isIndex == true }"
          
          itemscope
          itemtype="https://schema.org/ImageObject"
        >
          <img
            :alt="room.name"

            :title="'book ' + room.name + '  Central Avenue'"
            :src="room.image"
            class="img cursor-pointer img-fluid"
            itemprop="contentUrl"
          />

            <div class="images-count px-2 py-1">
              <div
            class="price-box"
            itemprop="offers"
            itemscope
            itemtype="https://schema.org/Offer"
          >
            <div class="d-inline-flex ">
              <template v-if="room.discounted_price">
                <div class="sale-price  mr-3 text-white" itemprop="price">
                  {{ room.currency }}{{ room.converted_price | priceFormat }}
                </div>
                <div class="price bold-3 text-white" itemprop="price">
                  {{ room.currency }}{{ room.discounted_price | priceFormat }}
                </div>
              </template>
              <template v-else>
                <div class="price bold-3 mt-2 text-white" itemprop="price">
                  {{ room.currency }}{{ room.converted_price | priceFormat }}
                </div>
              </template>
            </div>
            <div class="text-size-2" itemprop="priceCurrency">
              {{ room.price_mode }}
            </div>
          </div>
          </div>


        
        
        </div>
        <div
          class="item rounded-top"
          :key="index"
          v-for="(image, index) in room.image_links"
          itemprop="photo"
          itemscope
          itemtype="https://schema.org/ImageObject"
        >
          <img
            :alt="room.name"
            :title="'book ' + room.name + '  Central Avenue'"
            @click.prevent="showRoom(room)"
            :src="image.image"
            class="img cursor-pointer img-fluid"
            itemprop="contentUrl"
          />

          
          <div class="images-count px-2 py-1">
              <div
            class="price-box"
            itemprop="offers"
            itemscope
            itemtype="https://schema.org/Offer"
          >
            <div class="d-inline-flex ">
              <template v-if="room.discounted_price">
                <div class="sale-price mr-3 text-white" itemprop="price">
                  {{ room.currency }}{{ room.converted_price | priceFormat }}
                </div>
                <div class="price bold-3 text-white" itemprop="price">
                  {{ room.currency }}{{ room.discounted_price | priceFormat }}
                </div>
              </template>
              <template v-else>
                <div class="price bold-3 mt-2 text-white" itemprop="price">
                  {{ room.currency }}{{ room.converted_price | priceFormat }}
                </div>
              </template>
            </div>
            <div class="text-size-2 text-white" itemprop="priceCurrency">
              {{ room.price_mode }}
            </div>
          </div>
          </div>
        </div>


      </div>
    </div>

      <!-- Price -->
  
    </div>

    <!-- Body -->
    <div class="card-body shadow-none px-2 py-0">

      <h5 class="card-title bold-2">
        <a :href="`/apartment/${room.slug}/`">{{ room.name }}</a>
      </h5>

      <p class="location">
        <i class="fas fa-map-marker-alt mr-1"></i>
       <span class="text-gold"> {{ room.property.city }}</span>
      </p>

      <!-- Meta -->
      <div class="d-flex justify-content-between align-items-center mb-3 text-muted meta">

      <div class="d-flex align-items-center text-muted meta">
        <span class="mr-3">
           <svg class="icon mr-1" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
            <path fill-rule="evenodd" d="M10.99 8A3 3 0 115 8a3 3 0 016 0zm8 0A3 3 0 1113 8a3 3 0 016 0zM8 13c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm7.03.05c.35-.03.68-.05.97-.05 2.33 0 7 1.17 7 3.5V19h-6v-2.5c0-1.48-.81-2.61-1.97-3.45z" clip-rule="evenodd"></path>
            </svg> {{ room.guests }}
        </span>
        <span class="mr-3">
            <svg class="icon mr-1" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path fill-rule="evenodd" d="M9.35 3.9C6.9 3.9 5 5.9 5 8.36V22H3V8.36A6.36 6.36 0 019.35 2c3.5 0 6.15 2.85 6.15 6.36V9.8h2c1.13 0 2.14.66 2.6 1.69l.9 1.99H8.1l.9-2a2.85 2.85 0 012.6-1.68h2V8.36c0-2.46-1.79-4.46-4.25-4.46z" clip-rule="evenodd"></path> <path d="M12.5 16.5a1 1 0 11-2 0 1 1 0 012 0zm6 0a1 1 0 11-2 0 1 1 0 012 0zm-8.5 4a1 1 0 11-2 0 1 1 0 012 0zm5.5 0a1 1 0 11-2 0 1 1 0 012 0zm5.5 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg> {{ room.bath }} 3
        </span>
        <span>
              <svg class="icon mr-1" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path data-v-38cd3ee8="" fill-rule="evenodd" d="M11 7h8a4 4 0 014 4v9h-2v-3H3v3H1V5h2v9h8V7zm-1 3a3 3 0 11-6 0 3 3 0 016 0z" clip-rule="evenodd"></path></svg>{{ room.bed }} 3
        </span>
      </div>

      <!-- Button -->
      <a href="#"  
        v-if="showReserve"
        @click.prevent="reserve(room)"
        class="btn btn-primary  rounded-pill rounded ">
        Reserve
      </a>
      </div>



    </div>
  </div>
</div>

</template>

<script>

import Hls from "hls.js";

export default {
  props: {
    property: Object,
    room: Object,
    propertyLoading: Boolean,
    stays: Array,
    qty: Boolean,
    amenities: Array,
    classType: Array,
    showReserve: Boolean,
    isGallery: Number,
    isIndex: Boolean


  },
  data() {
    return {
      total: 0,
      aps: 0,
      totalRooms: 0,
      apartment_bed_rooms: 0,
      attrPrice: 0,
      checkedAttr: [],
      guests: 0,
      sub_total: 0,
      lunchModal: false,
      showSlider: false,
      propertyQty: [],
      isPlaying: false,
      src: "",
      apartment_facilities: [],
      settings: {
        dots: true,
        dotsClass: "slick-dots custom-dot-class",
        edgeFriction: 0.35,
        infinite: false,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1,
      },

      form: {
        room_quantity: [],
        selectedRooms: [],
      },
    };
  },

  mounted() {

    const video = this.$refs.videoPlayer;

    console.log(this.room)
          this.src = "https://avevuemontaigne-ng.lon1.cdn.digitaloceanspaces.com/" + this.room.video.encoded_path;



    // if (Hls.isSupported()) {
    //   const hls = new Hls({
    //     capLevelToPlayerSize: true, // pick best resolution for screen
    //     maxBufferLength: 30,        // max buffer length in seconds
    //     autoStartLoad: true
    //   });

    //   hls.loadSource(this.src);      // master.m3u8 URL
    //   hls.attachMedia(video);

    //   hls.on(Hls.Events.MANIFEST_PARSED, () => {
    //     video.play();
    //   });

    //   // Optional: log quality levels
    //   hls.on(Hls.Events.LEVEL_LOADED, (event, data) => {
    //     console.log('Available qualities:', data.levels.map(l => l.height));
    //   });

    // } else if (video.canPlayType("application/vnd.apple.mpegurl")) {
    //   // Safari/iOS fallback
    //   video.src = this.src;
    //   video.addEventListener("loadedmetadata", () => {
    //     video.play();
    //   });
    // } else {
    //   console.error("HLS not supported in this browser.");
    // } 

    jQuery(function () {
      $(".room-carousel").owlCarousel({
        margin: 10,
        nav: true,
        dots: false,
        navText: [
          '<div class="nav-btn prev-slide d-flex justify-content-center align-items-center mr-1"><svg class="uitk-icon uitk-icon-leading uitk-icon-directional" aria-label="Show previous image" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>Show previous image</title><path d="M14.862 16.448 10.414 12l4.446-4.447a.5.5 0 0 0-.007-.7l-.707-.707a.5.5 0 0 0-.707 0l-5.146 5.147a1 1 0 0 0 0 1.414l5.146 5.146a.5.5 0 0 0 .707 0l.707-.707a.5.5 0 0 0 .009-.698z"></path></svg></div>',
          '<div class="nav-btn next-slide d-flex justify-content-center align-items-center ml-1"><svg class="uitk-icon uitk-icon-leading uitk-icon-directional" aria-label="Show next image" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>Show next image</title><path d="M10.56 6.146a.5.5 0 0 0-.706 0l-.708.708a.5.5 0 0 0 0 .707L13.586 12l-4.44 4.44a.5.5 0 0 0 0 .706l.708.708a.5.5 0 0 0 .707 0l5.146-5.147a1 1 0 0 0 0-1.414l-5.146-5.147z"></path></svg></div>',
        ],
        responsive: {
          0: {
            items: 1,
          },
          600: {
            items: 1,
          },
          1000: {
            items: 1,
          },
        },
      });
    });

    video.addEventListener("pause", () => this.handleVideoStop());
    video.addEventListener("ended", () => this.handleVideoStop());


    $(".owl-carousel").on("changed.owl.carousel", () => {
      if (this.$refs.videoPlayer) {
        this.$refs.videoPlayer.pause();
        this.isPlaying =false

        console.log(this.isPlaying)

        const dots = document.querySelector(".aprts .owl-dots");

          console.log(dots)
          if (dots) {
            dots.classList.remove("video-is-playing");
          }
      }
    });
  },
  components: {},
  computed: {
    // isHomePage() {
    //   return window.location.pathname === "/" || window.location.pathname === "";
    // }
  },
  methods: {
    handleVideoStop() {
        this.isPlaying = false;
        const dots = document.querySelector(".aprts .owl-dots");
        if (dots) {
          dots.classList.remove("video-is-playing");
        }
      },

      // existing methods...

    initVideo() {
      this.isPlaying = true;

      const video = this.$refs.videoPlayer;

      const dots = document.querySelector(".aprts .owl-dots");

      console.log(dots)
      if (dots) {
        dots.classList.add("video-is-playing");
      }
      

      if (Hls.isSupported()) {

        const hls = new Hls({
          capLevelToPlayerSize: true,
          autoStartLoad: true,
        });

        hls.loadSource(this.src);
        hls.attachMedia(video);

        hls.on(Hls.Events.MANIFEST_PARSED, () => {
          video.play();
        });

      } else if (video.canPlayType("application/vnd.apple.mpegurl")) {
        video.src = this.src;
        video.addEventListener("loadedmetadata", () => {
          video.play();
        });
      }
    },

    sum(arr) {
      return arr.reduce((a, b) => parseInt(a) + parseInt(b), 0);
    },
    showRoom(room) {
      this.$emit("showRoom", room);
    },
    showImages(room) {
      this.$emit("showImages", room);
    },
    reserve(room) {
      this.$emit("reserve", { room });
    },
    getApartmentQuantity(e, ap) {
      this.guests = ap.max_adults + ap.max_children;
      this.apartment_bed_rooms = ap.no_of_rooms;
      let qty = e.target.value;
      this.totalRooms = 0;
      let selectApartmentQty = document.querySelectorAll(".room-q");
      let allSelectedRooms = [];
      let total = [];
      selectApartmentQty.forEach((e, i) => {
        if (e.value != "") {
          allSelectedRooms.push(e.value);
          total.push(e.selectedOptions[0].dataset.price || 0);
        }
      });

      this.aps = this.sum(allSelectedRooms);
      this.total = this.sum(total) * parseInt(this.stays[0]);

      if (this.form.selectedRooms.findIndex((x) => x.id == ap.id) == -1) {
        this.form.selectedRooms.push(ap);
      } else {
        this.form.selectedRooms.forEach((o, i) => {
          if (o.id == ap.id) {
            this.form.selectedRooms.splice(i, 1);
          }
        });
      }

      let aps = this.aps;
      let t = this.total;
      this.$emit("qtyChange", { total: t, aps: aps });
      // Turn on extra services
    },
  },
};


</script>
<style scoped>
.video-wrapper {
  position: relative;
  overflow: hidden;
}

.video-preview {
  position: relative;
}

.video-play-btn {
  position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: rgba(0, 0, 0, 0.55);
    color: white;
    font-size: 21px;
    border-radius: 50%;
    width: 60px;
    height: 60px;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    align-content: center;
    align-self: center;
}

.custom-video {
  object-fit: cover;
  height: 245px;
}

.video-pill {
  font-size: small;
  color: brown;
}
.icon {
  vertical-align: middle;
  margin-top: -2px;
  opacity: 0.8;
}
.icon {
  color: #000; /* pure black */
}

</style>
