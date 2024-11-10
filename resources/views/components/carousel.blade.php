<div x-data="carousel({{ $images->toJson() }})" class="relative w-full max-w-4xl mx-auto mt-10">
    <!-- Carrusel de imágenes -->
    <div class="relative overflow-hidden rounded-lg">
        <div class="flex transition-transform duration-700 ease-in-out"
            :style="'transform: translateX(-' + currentIndex * 100 + '%)'">
            <template x-for="(image, index) in images" :key="index">
                <div class="flex-shrink-0 w-full">
                    <img :src="image.url" class="w-full h-auto" alt="Imagen del carrusel">
                </div>
            </template>
        </div>
    </div>
    <!-- Controles del carrusel -->
    <div class="absolute top-1/2 left-4 transform -translate-y-1/2 flex items-center">
        <button @click="prev" class="p-2 rounded-full bg-white hover:bg-purple-500 hover:text-gray-50 bg-opacity-75 hover:bg-opacity-100 transition-all">
            &larr;
        </button>
    </div>
    <div class="absolute top-1/2 right-4 transform -translate-y-1/2 flex items-center">
        <button @click="next" class="p-2 rounded-full bg-white hover:bg-purple-500 hover:text-gray-50 bg-opacity-75 hover:bg-opacity-100 transition-all">
            &rarr;
        </button>
    </div>
</div>

<script>
    function carousel(images) {
        return {
            images: images,
            currentIndex: 0,
            prev() {
                this.currentIndex = (this.currentIndex > 0) ? this.currentIndex - 1 : this.images.length - 1;
            },
            next() {
                this.currentIndex = (this.currentIndex < this.images.length - 1) ? this.currentIndex + 1 : 0;
            }
        }
    }
</script>
