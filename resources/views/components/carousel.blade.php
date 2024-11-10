<div x-data="carousel({{ $images->toJson() }})" class="relative w-full max-w-4xl mx-auto mt-10">
    <!-- Carrusel de imágenes -->
    <div class="relative overflow-hidden rounded-lg">
        <div class="flex transition-transform duration-700 ease-in-out" :style="'transform: translateX(-' + currentIndex * 100 + '%)'" x-on:touchstart="startTouch($event)" x-on:touchmove="moveTouch($event)">
            <template x-for="(image, index) in images" :key="index">
                <div class="flex-shrink-0 w-full">
                    <img :src="image.url" class="w-full h-auto" alt="Imagen del carrusel">
                </div>
            </template>
        </div>
    </div>
    <!-- Controles del carrusel -->
    <div class="flex justify-between items-center mt-4 px-3">
        <!-- Botón de navegación anterior -->
        <button @click="prev" class="p-2 border border-purple-700 hover:bg-purple-500 hover:text-gray-50 rounded-sm transition-all w-1/3 sm:w-auto sm:rounded-full sm:bg-white sm:bg-opacity-75 sm:hover:bg-opacity-100 sm:p-4">
            &larr;
        </button>
        <!-- Botón de navegación siguiente -->
        <button @click="next" class="p-2 border border-purple-700 hover:bg-purple-500 hover:text-gray-50 rounded-sm transition-all w-1/3 sm:w-auto sm:rounded-full sm:bg-white sm:bg-opacity-75 sm:hover:bg-opacity-100 sm:p-4">
            &rarr;
        </button>
    </div>
</div>

<script>
    function carousel(images) {
        return {
            images: images,
            currentIndex: 0,
            startX: 0,
            endX: 0,
            prev() {
                this.currentIndex = (this.currentIndex > 0) ? this.currentIndex - 1 : this.images.length - 1;
            },
            next() {
                this.currentIndex = (this.currentIndex < this.images.length - 1) ? this.currentIndex + 1 : 0;
            },
            startTouch(event) {
                this.startX = event.touches[0].clientX;
            },
            moveTouch(event) {
                this.endX = event.touches[0].clientX;
                if (this.startX - this.endX > 50) {
                    this.next();
                }
                if (this.startX - this.endX < -50) {
                    this.prev();
                }
            }
        }
    }
</script>
