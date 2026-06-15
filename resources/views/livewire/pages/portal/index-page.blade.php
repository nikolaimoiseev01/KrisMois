<div className="min-h-screen bg-white overflow-x-hidden">

    <section
        x-data
        class="flex min-h-screen items-center bg-white px-6 py-16 md:min-h-0 md:py-10 sm:px-4"
    >
        <div class="mx-auto w-full max-w-7xl">
            <div class="grid grid-cols-2 items-center gap-16 lg:grid-cols-1 lg:gap-12">
                <!-- Left - Portrait -->
                <div
                    x-data="{ show: false }"
                    x-init="setTimeout(() => show = true, 200)"
                    x-bind:class="show ? 'opacity-100 scale-100' : 'opacity-0 scale-95'"
                    class="transition-all duration-1000 ease-out"
                >
                    <div class="aspect-[3/4] overflow-hidden">
                        <img
                            src="/fixed/welcome-photo.png"
                            alt="Кристина Моисеева"
                            class="h-full w-full object-cover grayscale"
                        >
                    </div>
                </div>

                <!-- Right - Text -->
                <div
                    x-data="{ show: false }"
                    x-init="setTimeout(() => show = true, 500)"
                    x-bind:class="show ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'"
                    class="space-y-8 transition-all duration-1000 ease-out"
                >
                    <div class="space-y-4">
                        <h1 class="text-7xl leading-[1.05] tracking-tight text-black lg:text-6xl md:text-5xl sm:text-4xl">
                            Кристина
                            <br>
                            Моисеева
                        </h1>

                        <p class="text-2xl text-black/50 md:text-xl">
                            Бренд-менеджер
                        </p>
                    </div>

                    <div class="space-y-4">
                        <h2 class="text-3xl tracking-tight text-black md:text-2xl sm:text-xl">
                            Стратегия. Смыслы. Бренды.
                        </h2>

                        <p class="text-xl leading-relaxed text-black/70 md:text-lg sm:text-base">
                            Я верю, что сильный бренд начинается не с логотипа, а с понимания людей,
                            для которых он создаётся.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-neutral-50 px-6 py-12 md:py-12 sm:px-4">
        <div
            x-data="{ inView: false }"
            x-intersect.threshold.30="inView = true"
            x-bind:class="inView ? 'opacity-100' : 'opacity-0'"
            class="mx-auto max-w-5xl space-y-10 transition-opacity duration-700 ease-out"
        >
            <h2 class="text-5xl leading-[1.1] tracking-tight text-black md:text-4xl sm:text-3xl">
                Почему именно я?
            </h2>

            <div class="space-y-6 text-xl leading-relaxed text-black/70 md:text-lg sm:text-base">
                <p>
                    Я не верю в брендинг ради брендинга.
                </p>

                <p>
                    За красивой айдентикой всегда должен стоять смысл.
                </p>

                <p>
                    В своей работе я привыкла опираться на исследования, аналитику и реальные данные,
                    потому что именно они позволяют принимать решения, которые работают не только
                    в презентации, но и в бизнесе.
                </p>

                <p>
                    Мне интересно находить инсайты, изучать поведение аудитории, формулировать
                    позиционирование и превращать сложные идеи в понятные и востребованные бренды.
                </p>
            </div>
        </div>
    </section>

    <section
        x-data="{ openIndex: null, inView: false }"
        x-intersect.threshold.05="inView = true"
        class="bg-[#0a0a0a] px-6 py-16 md:py-16 sm:px-4"
    >
        <div class="mx-auto max-w-5xl">
            <div
                x-bind:class="inView ? 'translate-y-0 opacity-100' : 'translate-y-6 opacity-0'"
                class="mb-14 flex flex-col gap-4 transition-all duration-700 ease-out md:mb-10"
            >
                <h2 class="text-[clamp(2.8rem,7vw,5.5rem)] leading-none tracking-tight text-white">
                    Проекты,<br>которыми горжусь
                </h2>
            </div>

            <div
                x-bind:class="inView ? 'opacity-100' : 'opacity-0'"
                class="transition-opacity delay-200 duration-700"
            >
                <!-- Project item -->
                <div class="group border-t border-white/10">
                    <button
                        type="button"
                        @click="openIndex = openIndex === 0 ? null : 0"
                        class="flex w-full items-center gap-5 py-6 text-left md:gap-4"
                    >
                    <span
                        class="shrink-0 text-xs tracking-[0.2em] tabular-nums transition-colors duration-300"
                        :class="openIndex === 0 ? 'text-white/60' : 'text-white/20'"
                    >
                        01
                    </span>

                        <span
                            class="flex-1 text-[clamp(1.6rem,4vw,3.2rem)] leading-[1.05] tracking-[-0.02em] transition-all duration-500"
                            :class="openIndex === 0 ? 'text-white' : 'text-white/50 group-hover:text-white/85'"
                        >
                        Ямал Гурмэ
                    </span>

                        <div class="flex items-center gap-6 lg:hidden">
                        <span class="text-xs uppercase tracking-[0.15em] text-white/25">
                            Региональный бренд
                        </span>
                        </div>

                        <div
                            class="flex h-8 w-8 shrink-0 items-center justify-center border transition-all duration-300"
                            :class="openIndex === 0 ? 'border-white/40' : 'border-white/15'"
                        >
                        <span
                            class="block select-none text-lg leading-none text-white/60 transition-transform duration-300"
                            :class="openIndex === 0 ? 'rotate-45' : 'rotate-0'"
                        >
                            +
                        </span>
                        </div>
                    </button>

                    <div
                        x-show="openIndex === 0"
                        x-collapse
                        x-cloak
                        class="overflow-hidden"
                    >
                        <div class="pb-10 md:pb-8">
                            <div class="grid grid-cols-[3fr_2fr] gap-12 lg:grid-cols-1 lg:gap-8">
                                <!-- Carousel -->
                                <div
                                    x-data="{
                                    active: 0,
                                    images: [
                                        {
                                            src: '{{ asset('images/yamal-1.png') }}',
                                            contain: false,
                                            bg: '#111'
                                        },
                                        {
                                            src: '{{ asset('images/yamal-2.jpg') }}',
                                            contain: false,
                                            bg: '#111'
                                        },
                                        {
                                            src: '{{ asset('images/yamal-3.jpg') }}',
                                            contain: false,
                                            bg: '#111'
                                        },
                                        {
                                            src: '{{ asset('images/yamal-4.jpg') }}',
                                            contain: false,
                                            bg: '#111'
                                        }
                                    ]
                                }"
                                    class="flex flex-col gap-2.5"
                                >
                                    <div class="relative aspect-[16/10] overflow-hidden">
                                        <template x-for="(image, index) in images" :key="index">
                                            <div
                                                x-show="active === index"
                                                x-transition.opacity.duration.300ms
                                                class="h-full w-full"
                                                :style="`background: ${image.bg}`"
                                            >
                                                <img
                                                    :src="image.src"
                                                    :alt="`Фото ${index + 1}`"
                                                    class="h-full w-full"
                                                    :class="image.contain ? 'object-contain p-8' : 'object-cover'"
                                                >
                                            </div>
                                        </template>

                                        <div class="absolute bottom-3 right-3 bg-black/50 px-2.5 py-1 text-xs tracking-widest text-white/90 backdrop-blur-sm">
                                            <span x-text="active + 1"></span> /
                                            <span x-text="images.length"></span>
                                        </div>
                                    </div>

                                    <div class="flex gap-1.5" x-show="images.length > 1">
                                        <template x-for="(image, index) in images" :key="index">
                                            <button
                                                type="button"
                                                @click="active = index"
                                                class="relative shrink-0 overflow-hidden transition-all duration-300"
                                                :style="`width: ${100 / images.length}%; aspect-ratio: 16 / 10; opacity: ${active === index ? 1 : 0.35}; outline: ${active === index ? '2px solid #fff' : 'none'}; background: ${image.bg}`"
                                            >
                                                <img
                                                    :src="image.src"
                                                    alt=""
                                                    class="h-full w-full"
                                                    :class="image.contain ? 'object-contain' : 'object-cover'"
                                                >
                                            </button>
                                        </template>
                                    </div>
                                </div>

                                <!-- Text -->
                                <div class="flex flex-col justify-start gap-5">
                                    <div class="hidden text-xs uppercase tracking-[0.15em] text-white/30 lg:block">
                                        Региональный бренд
                                    </div>

                                    <p class="text-base leading-relaxed text-white/50">
                                        Разработка и запуск регионального бренда локальной продукции Ямала.
                                        От исследования и разработки концепции до вывода бренда на рынок
                                        и реализации стратегии продвижения.
                                    </p>

                                    <div class="space-y-2.5 pt-1">
                                        <div class="flex items-start gap-3">
                                            <span class="mt-[5px] shrink-0 text-[9px] text-white/20">✦</span>
                                            <p class="text-sm leading-relaxed text-white/40">
                                                Разработка регионального бренда с нуля
                                            </p>
                                        </div>

                                        <div class="flex items-start gap-3">
                                            <span class="mt-[5px] shrink-0 text-[9px] text-white/20">✦</span>
                                            <p class="text-sm leading-relaxed text-white/40">
                                                Проведение аналитики, количественного и качественного исследования
                                            </p>
                                        </div>

                                        <div class="flex items-start gap-3">
                                            <span class="mt-[5px] shrink-0 text-[9px] text-white/20">✦</span>
                                            <p class="text-sm leading-relaxed text-white/40">
                                                Разработка бренд-платформы
                                            </p>
                                        </div>

                                        <div class="flex items-start gap-3">
                                            <span class="mt-[5px] shrink-0 text-[9px] text-white/20">✦</span>
                                            <p class="text-sm leading-relaxed text-white/40">
                                                Создание дизайн-системы бренда
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="border-t border-white/10"></div>
            </div>
        </div>
    </section>

    <section
        x-data="{ inView: false }"
        x-intersect.threshold.10="inView = true"
        class="bg-neutral-50 px-6 py-14 md:py-14 sm:px-4"
    >
        <div class="mx-auto max-w-6xl">
            <div
                x-bind:class="inView ? 'opacity-100' : 'opacity-0'"
                class="space-y-14 transition-opacity duration-700 ease-out md:space-y-10"
            >
                <h2 class="text-5xl leading-[1.1] tracking-tight text-black md:text-4xl sm:text-3xl">
                    Последние 10 лет
                </h2>

                <div class="space-y-0">
                    <!-- 1 -->
                    <div
                        x-bind:class="inView ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'"
                        class="group border-t border-black/10 py-10 transition-all duration-700 ease-out md:py-8"
                    >
                        <div class="grid grid-cols-[1fr_2fr] gap-16 lg:grid-cols-1 lg:gap-6">
                            <div class="space-y-2">
                                <h3 class="text-xl leading-snug tracking-tight text-black md:text-lg">
                                    Брендинговое агентство «Дюшес»
                                </h3>
                                <p class="text-base uppercase tracking-widest text-black/40 sm:text-sm">
                                    Бренд-менеджер
                                </p>
                            </div>

                            <div class="space-y-3">
                                <div class="flex items-start gap-4">
                                    <span class="mt-1.5 shrink-0 text-xs text-black/25">✦</span>
                                    <p class="flex-1 text-base leading-relaxed text-black/65 md:text-base">
                                        Разработка бренд-платформ, позиционирования и коммуникационных стратегий для компаний из различных отраслей
                                    </p>
                                </div>

                                <div class="flex items-start gap-4">
                                    <span class="mt-1.5 shrink-0 text-xs text-black/25">✦</span>
                                    <p class="flex-1 text-base leading-relaxed text-black/65 md:text-base">
                                        Проведение качественных и количественных исследований рынка, аудитории и конкурентной среды
                                    </p>
                                </div>

                                <div class="flex items-start gap-4">
                                    <span class="mt-1.5 shrink-0 text-xs text-black/25">✦</span>
                                    <p class="flex-1 text-base leading-relaxed text-black/65 md:text-base">
                                        Поиск потребительских инсайтов и определение точек роста брендов
                                    </p>
                                </div>

                                <div class="flex items-start gap-4">
                                    <span class="mt-1.5 shrink-0 text-xs text-black/25">✦</span>
                                    <p class="flex-1 text-base leading-relaxed text-black/65 md:text-base">
                                        Создание концепций брендов, разработка нейминга и архитектуры продуктовых линеек
                                    </p>
                                </div>

                                <div class="flex items-start gap-4">
                                    <span class="mt-1.5 shrink-0 text-xs text-black/25">✦</span>
                                    <p class="flex-1 text-base leading-relaxed text-black/65 md:text-base">
                                        Управление проектами на всех этапах: от исследования и стратегии до внедрения решений
                                    </p>
                                </div>

                                <div class="flex items-start gap-4">
                                    <span class="mt-1.5 shrink-0 text-xs text-black/25">✦</span>
                                    <p class="flex-1 text-base leading-relaxed text-black/65 md:text-base">
                                        Постановка задач дизайнерам и подрядчикам, контроль качества реализации концепций
                                    </p>
                                </div>

                                <div class="flex items-start gap-4">
                                    <span class="mt-1.5 shrink-0 text-xs text-black/25">✦</span>
                                    <p class="flex-1 text-base leading-relaxed text-black/65 md:text-base">
                                        Подготовка и защита стратегических решений перед клиентами
                                    </p>
                                </div>

                                <div class="flex items-start gap-4">
                                    <span class="mt-1.5 shrink-0 text-xs text-black/25">✦</span>
                                    <p class="flex-1 text-base leading-relaxed text-black/65 md:text-base">
                                        Координация работы проектных команд, объединяющих стратегию, креатив и дизайн
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 2 -->
                    <div
                        x-bind:class="inView ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'"
                        class="group border-t border-black/10 py-10 transition-all delay-150 duration-700 ease-out md:py-8"
                    >
                        <div class="grid grid-cols-[1fr_2fr] gap-16 lg:grid-cols-1 lg:gap-6">
                            <div class="space-y-2">
                                <h3 class="text-xl leading-snug tracking-tight text-black md:text-lg">
                                    Издательство «Первая книга»
                                </h3>
                                <p class="text-base uppercase tracking-widest text-black/40 sm:text-sm">
                                    Основатель
                                </p>
                            </div>

                            <div class="space-y-3">
                                <div class="flex items-start gap-4">
                                    <span class="mt-1.5 shrink-0 text-xs text-black/25">✦</span>
                                    <p class="flex-1 text-base leading-relaxed text-black/65">
                                        Создание и развитие собственного издательского проекта
                                    </p>
                                </div>

                                <div class="flex items-start gap-4">
                                    <span class="mt-1.5 shrink-0 text-xs text-black/25">✦</span>
                                    <p class="flex-1 text-base leading-relaxed text-black/65">
                                        Формирование маркетинговой стратегии и продвижение бренда
                                    </p>
                                </div>

                                <div class="flex items-start gap-4">
                                    <span class="mt-1.5 shrink-0 text-xs text-black/25">✦</span>
                                    <p class="flex-1 text-base leading-relaxed text-black/65">
                                        Управление операционной и финансовой деятельностью компании
                                    </p>
                                </div>

                                <div class="flex items-start gap-4">
                                    <span class="mt-1.5 shrink-0 text-xs text-black/25">✦</span>
                                    <p class="flex-1 text-base leading-relaxed text-black/65">
                                        Организация работы команды и выстраивание бизнес-процессов
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 3 -->
                    <div
                        x-bind:class="inView ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'"
                        class="group border-t border-black/10 py-10 transition-all delay-300 duration-700 ease-out md:py-8"
                    >
                        <div class="grid grid-cols-[1fr_2fr] gap-16 lg:grid-cols-1 lg:gap-6">
                            <div class="space-y-2">
                                <h3 class="text-xl leading-snug tracking-tight text-black md:text-lg">
                                    ООО «Мастер Франшизы» <br class="sm:hidden">
                                    ТМ «Добрынинский»
                                </h3>
                                <p class="text-base uppercase tracking-widest text-black/40 sm:text-sm">
                                    Бренд-менеджер
                                </p>
                            </div>

                            <div class="space-y-3">
                                <div class="flex items-start gap-4">
                                    <span class="mt-1.5 shrink-0 text-xs text-black/25">✦</span>
                                    <p class="flex-1 text-base leading-relaxed text-black/65">
                                        Создание и запуск новых брендов компании с нуля
                                    </p>
                                </div>

                                <div class="flex items-start gap-4">
                                    <span class="mt-1.5 shrink-0 text-xs text-black/25">✦</span>
                                    <p class="flex-1 text-base leading-relaxed text-black/65">
                                        Доработка бренд-платформы, выстраивание позиционирования и стратегии развития
                                    </p>
                                </div>

                                <div class="flex items-start gap-4">
                                    <span class="mt-1.5 shrink-0 text-xs text-black/25">✦</span>
                                    <p class="flex-1 text-base leading-relaxed text-black/65">
                                        Анализ рынка, конкурентной среды и потребительского поведения
                                    </p>
                                </div>

                                <div class="flex items-start gap-4">
                                    <span class="mt-1.5 shrink-0 text-xs text-black/25">✦</span>
                                    <p class="flex-1 text-base leading-relaxed text-black/65">
                                        Формирование маркетинговых материалов и коммуникационных решений
                                    </p>
                                </div>

                                <div class="flex items-start gap-4">
                                    <span class="mt-1.5 shrink-0 text-xs text-black/25">✦</span>
                                    <p class="flex-1 text-base leading-relaxed text-black/65">
                                        Управление работой дизайнеров, подрядчиков и рекламных агентств
                                    </p>
                                </div>

                                <div class="flex items-start gap-4">
                                    <span class="mt-1.5 shrink-0 text-xs text-black/25">✦</span>
                                    <p class="flex-1 text-base leading-relaxed text-black/65">
                                        Реализация специальных маркетинговых проектов и партнерских коллабораций
                                    </p>
                                </div>

                                <div class="flex items-start gap-4">
                                    <span class="mt-1.5 shrink-0 text-xs text-black/25">✦</span>
                                    <p class="flex-1 text-base leading-relaxed text-black/65">
                                        Участие в стратегическом развитии брендов компании
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border-t border-black/10"></div>
                </div>
            </div>
        </div>
    </section>

    <section
        x-data="{ inView: false }"
        x-intersect.threshold.20="inView = true"
        class="bg-white px-6 py-20 md:py-16 sm:px-4"
    >
        <div class="mx-auto max-w-6xl">
            <div
                x-bind:class="inView ? 'opacity-100' : 'opacity-0'"
                class="space-y-14 transition-opacity duration-700 ease-out md:space-y-10"
            >
                <h2 class="text-5xl leading-[1.1] tracking-tight text-black md:text-4xl sm:text-3xl">
                    Образование
                </h2>

                <div class="grid grid-cols-2 gap-6 md:grid-cols-1">
                    <!-- 1 -->
                    <div
                        x-bind:class="inView ? 'translate-y-0 opacity-100' : 'translate-y-8 opacity-0'"
                        class="relative overflow-hidden bg-neutral-50 p-8 transition-all duration-700 ease-out md:p-6"
                    >
                        <div class="pointer-events-none absolute right-6 top-4 select-none text-[80px] leading-none tracking-tight text-black/5 md:text-[64px]">
                            2014
                        </div>

                        <div class="relative space-y-5">
                            <div class="flex items-start justify-between gap-4">
                            <span class="border border-black/15 px-3 py-1 text-xs uppercase tracking-widest text-black/40">
                                Россия
                            </span>

                                <span class="text-sm tracking-wide text-black/40">
                                2014–2018
                            </span>
                            </div>

                            <div class="space-y-2 pt-2">
                                <h3 class="text-xl leading-snug tracking-tight text-black md:text-lg">
                                    Петрозаводский государственный университет
                                </h3>

                                <p class="text-base uppercase tracking-widest text-black/40 sm:text-sm">
                                    Социология
                                </p>
                            </div>

                            <p class="text-base leading-relaxed text-black/55">
                                Изучение методов исследования потребительского поведения,
                                анализа данных и социальных процессов.
                            </p>
                        </div>
                    </div>

                    <!-- 2 -->
                    <div
                        x-bind:class="inView ? 'translate-y-0 opacity-100' : 'translate-y-8 opacity-0'"
                        class="relative overflow-hidden bg-neutral-50 p-8 transition-all delay-200 duration-700 ease-out md:p-6"
                    >
                        <div class="pointer-events-none absolute right-6 top-4 select-none text-[80px] leading-none tracking-tight text-black/5 md:text-[64px]">
                            2017
                        </div>

                        <div class="relative space-y-5">
                            <div class="flex items-start justify-between gap-4">
                            <span class="border border-black/15 px-3 py-1 text-xs uppercase tracking-widest text-black/40">
                                Венгрия
                            </span>

                                <span class="text-sm tracking-wide text-black/40">
                                2017–2018
                            </span>
                            </div>

                            <div class="space-y-2 pt-2">
                                <h3 class="text-xl leading-snug tracking-tight text-black md:text-lg">
                                    University of Pécs
                                </h3>

                                <p class="text-base uppercase tracking-widest text-black/40 sm:text-sm">
                                    Бизнес-администрирование и управление
                                </p>
                            </div>

                            <p class="text-base leading-relaxed text-black/55">
                                Подготовка в области управления, экономики и стратегического
                                развития бизнеса в международной среде.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section
        x-data="{ inView: false }"
        x-intersect.threshold.15="inView = true"
        class="bg-neutral-50 px-6 py-20 md:py-16 sm:px-4"
    >
        <div class="mx-auto max-w-6xl">
            <div
                x-bind:class="inView ? 'opacity-100' : 'opacity-0'"
                class="space-y-14 transition-opacity duration-700 ease-out md:space-y-10"
            >
                <!-- Photos grid -->
                <div class="grid grid-cols-3 gap-3 md:grid-cols-1">
                    <div
                        x-bind:class="inView ? 'translate-y-0 opacity-100' : 'translate-y-8 opacity-0'"
                        class="aspect-[3/4] overflow-hidden bg-neutral-200 transition-all duration-700 ease-out"
                    >
                        <img
                            src="{{ asset('images/photo_2026-06-10_12-36-01__2_.jpg') }}"
                            alt="Рабочий момент 1"
                            class="h-full w-full object-cover grayscale transition-all duration-700 hover:grayscale-0"
                        >
                    </div>

                    <div
                        x-bind:class="inView ? 'translate-y-0 opacity-100' : 'translate-y-8 opacity-0'"
                        class="aspect-[3/4] overflow-hidden bg-neutral-200 transition-all delay-150 duration-700 ease-out"
                    >
                        <img
                            src="{{ asset('images/photo_2026-06-10_12-36-01.jpg') }}"
                            alt="Рабочий момент 2"
                            class="h-full w-full object-cover grayscale transition-all duration-700 hover:grayscale-0"
                        >
                    </div>

                    <div
                        x-bind:class="inView ? 'translate-y-0 opacity-100' : 'translate-y-8 opacity-0'"
                        class="aspect-[3/4] overflow-hidden bg-neutral-200 transition-all delay-300 duration-700 ease-out"
                    >
                        <img
                            src="{{ asset('images/photo_2026-06-10_12-37-23.jpg') }}"
                            alt="Рабочий момент 3"
                            class="h-full w-full object-cover grayscale transition-all duration-700 hover:grayscale-0"
                        >
                    </div>
                </div>

                <!-- Statement -->
                <div
                    x-bind:class="inView ? 'translate-y-0 opacity-100' : 'translate-y-5 opacity-0'"
                    class="max-w-4xl border-l-2 border-black pl-8 transition-all delay-500 duration-700 ease-out md:pl-5"
                >
                    <p class="text-xl leading-relaxed text-black/70 md:text-lg sm:text-base">
                        За последние годы я работала с федеральными брендами, образовательными проектами,
                        FMCG, государственными инициативами и стартапами. От исследований и стратегии
                        до упаковки, запуска и внедрения. Для меня бренд — это не набор красивых элементов,
                        а инструмент, который помогает бизнесу находить своих людей и расти.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section
        x-data="{ inView: false }"
        x-intersect.threshold.30="inView = true"
        class="bg-black px-6 py-20 md:py-16 sm:px-4"
    >
        <div class="mx-auto max-w-2xl">
            <div
                x-bind:class="inView ? 'opacity-100' : 'opacity-0'"
                class="space-y-16 transition-opacity duration-700 ease-out md:space-y-12"
            >
                <!-- Heading -->
                <h2
                    x-bind:class="inView ? 'translate-y-0 opacity-100' : 'translate-y-8 opacity-0'"
                    class="text-7xl leading-[1.05] tracking-tight text-white transition-all duration-700 ease-out md:text-4xl sm:text-3xl"
                >
                    Давайте
                    <br>
                    <span class="text-white/40">поговорим</span>
                </h2>

                <!-- Contacts -->
                <div class="space-y-0">
                    <!-- Phone -->
                    <div
                        x-bind:class="inView ? 'translate-y-0 opacity-100' : 'translate-y-5 opacity-0'"
                        class="group flex items-center justify-between border-t border-white/10 py-7 transition-all delay-200 duration-700 ease-out md:flex-col md:items-start md:gap-3"
                    >
                    <span class="text-sm uppercase tracking-widest text-white/30">
                        Телефон
                    </span>

                        <a
                            href="tel:+79116683719"
                            class="flex items-center gap-3 text-2xl text-white transition-colors duration-300 hover:text-white/60 md:text-lg"
                        >
                            +7 911 668 37 19
                            <span class="text-lg opacity-0 transition-opacity group-hover:opacity-100">→</span>
                        </a>
                    </div>

                    <!-- Telegram -->
                    <div
                        x-bind:class="inView ? 'translate-y-0 opacity-100' : 'translate-y-5 opacity-0'"
                        class="group flex items-center justify-between border-t border-white/10 py-7 transition-all delay-300 duration-700 ease-out md:flex-col md:items-start md:gap-3"
                    >
                    <span class="text-sm uppercase tracking-widest text-white/30">
                        Телеграм
                    </span>

                        <a
                            href="https://t.me/Kris_Moi"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="flex items-center gap-3 text-2xl text-white transition-colors duration-300 hover:text-white/60 md:text-lg"
                        >
                            @Kris_Moi
                            <span class="text-lg opacity-0 transition-opacity group-hover:opacity-100">→</span>
                        </a>
                    </div>

                    <!-- Email -->
                    <div
                        x-bind:class="inView ? 'translate-y-0 opacity-100' : 'translate-y-5 opacity-0'"
                        class="group flex items-center justify-between border-t border-white/10 py-7 transition-all delay-[420ms] duration-700 ease-out md:flex-col md:items-start md:gap-3"
                    >
                    <span class="text-sm uppercase tracking-widest text-white/30">
                        Почта
                    </span>

                        <a
                            href="mailto:sobakina.kris7@gmail.com"
                            class="flex items-center gap-3 text-2xl text-white transition-colors duration-300 hover:text-white/60 md:text-lg sm:text-base"
                        >
                            sobakina.kris7@gmail.com
                            <span class="text-lg opacity-0 transition-opacity group-hover:opacity-100">→</span>
                        </a>
                    </div>

                    <div class="border-t border-white/10"></div>
                </div>

                <!-- Footer -->
                <div
                    x-bind:class="inView ? 'opacity-100' : 'opacity-0'"
                    class="flex items-center justify-between transition-opacity delay-700 duration-700 ease-out md:flex-col md:items-start md:gap-3"
                >
                    <p class="text-sm text-white/20">
                        © 2026 Кристина Моисеева
                    </p>

                    <p class="text-sm uppercase tracking-widest text-white/20">
                        Бренд-менеджер
                    </p>
                </div>
            </div>
        </div>
    </section>

</div>
