<div
    x-data="pagePreloader()"
    x-init="init()"
    class="min-h-screen overflow-x-hidden bg-white"
>
    <div
        x-data="pagePreloader()"
        x-init="init()"
        class="min-h-screen overflow-x-hidden bg-white"
    >
        <div
            x-show="visible"
            x-transition:leave="transition-all duration-700 ease-in-out"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 z-[9999] flex items-center justify-center bg-white"
        >
            <div class="flex flex-col items-center gap-6">
                <div class="h-px w-48 overflow-hidden bg-black/10">
                    <div
                        class="h-full bg-black transition-all duration-700 ease-out"
                        :style="`width: ${progress}%`"
                    ></div>
                </div>

                <p class="text-xs uppercase tracking-[0.35em] text-black/40">
                    Создаем бренд
                </p>
            </div>
        </div>

    <section class="flex min-h-screen items-center bg-white px-6 py-16 md:min-h-0 md:py-10 sm:px-4">
        <div class="mx-auto w-full max-w-7xl">
            <div class="grid grid-cols-2 items-center gap-16 lg:grid-cols-1 lg:gap-12">
                <div
                    x-data="revealOnScroll(100)"
                    :class="shown ? 'translate-y-0 scale-100 opacity-100' : 'translate-y-10 scale-95 opacity-0'"
                    class="transition-all duration-1000 ease-out"
                >
                    <div class="aspect-[3/4] overflow-hidden">
                        <img
                            src="/fixed/welcome.jpg"
                            alt="Кристина Моисеева"
                            class="h-full w-full object-cover grayscale"
                        >
                    </div>
                </div>

                <div
                    x-data="revealOnScroll(300)"
                    :class="shown ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'"
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
        <div class="mx-auto max-w-5xl space-y-10">
            <h2
                x-data="revealOnScroll()"
                :class="shown ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'"
                class="text-5xl leading-[1.1] tracking-tight text-black transition-all duration-700 ease-out md:text-4xl sm:text-3xl"
            >
                Почему именно я?
            </h2>

            <div class="space-y-6 text-xl leading-relaxed text-black/70 md:text-lg sm:text-base">
                <p
                    x-data="revealOnScroll(100)"
                    :class="shown ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'"
                    class="transition-all duration-700 ease-out"
                >
                    Я не верю в брендинг ради брендинга.
                </p>

                <p
                    x-data="revealOnScroll(150)"
                    :class="shown ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'"
                    class="transition-all duration-700 ease-out"
                >
                    За красивой айдентикой всегда должен стоять смысл.
                </p>

                <p
                    x-data="revealOnScroll(200)"
                    :class="shown ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'"
                    class="transition-all duration-700 ease-out"
                >
                    В своей работе я привыкла опираться на исследования, аналитику и реальные данные,
                    потому что именно они позволяют принимать решения, которые работают не только
                    в презентации, но и в бизнесе.
                </p>

                <p
                    x-data="revealOnScroll(250)"
                    :class="shown ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'"
                    class="transition-all duration-700 ease-out"
                >
                    Мне интересно находить инсайты, изучать поведение аудитории, формулировать
                    позиционирование и превращать сложные идеи в понятные и востребованные бренды.
                </p>
            </div>
        </div>
    </section>

    <section
        x-data="{ openIndex: null }"
        class="bg-[#0a0a0a] px-6 py-24 md:py-16"
    >
        <div class="mx-auto max-w-5xl">
            <div
                x-data="revealOnScroll()"
                :class="shown ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'"
                class="mb-20 flex flex-col gap-4 transition-all duration-700 ease-out md:mb-14"
            >
                <h2 class="text-[clamp(2.8rem,7vw,5.5rem)] leading-none tracking-tight text-white">
                    Проекты,<br>
                    которыми горжусь
                </h2>
            </div>

            <div class="border-b border-white/10">
                @foreach($projects as $i => $project)
                    <article
                        x-data="revealOnScroll({{ $i * 100 }})"
                        :class="shown ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'"
                        class="border-t border-white/10 transition-all duration-700 ease-out"
                    >
                        <button
                            type="button"
                            @click="openIndex = openIndex === {{ $i }} ? null : {{ $i }}"
                            class="group flex w-full items-center gap-8 py-8 text-left md:gap-5 md:py-6"
                        >
                            <span
                                class="shrink-0 text-xs tabular-nums tracking-[0.2em] transition-colors duration-300"
                                :class="openIndex === {{ $i }} ? 'text-white/60' : 'text-white/20'"
                            >
                                {{ $project['index'] }}
                            </span>

                            <span
                                class="flex-1 text-[clamp(1.6rem,4vw,3.2rem)] leading-[1.05] tracking-[-0.02em] transition-colors duration-300"
                                :class="openIndex === {{ $i }}
                                    ? 'text-white'
                                    : 'text-white/50 group-hover:text-white/85'"
                            >
                                {{ $project['name'] }}
                            </span>

                            <div class="flex items-center gap-6 md:hidden">
                                <span class="text-xs uppercase tracking-[0.15em] text-white/25">
                                    {{ $project['tag'] }}
                                </span>
                            </div>

                            <span
                                class="flex h-8 w-8 shrink-0 items-center justify-center border transition-all duration-300"
                                :class="openIndex === {{ $i }} ? 'border-white/40' : 'border-white/10'"
                            >
                                <span
                                    class="text-lg leading-none text-white/60 transition-transform duration-300"
                                    :class="openIndex === {{ $i }} ? 'rotate-45' : 'rotate-0'"
                                >
                                    +
                                </span>
                            </span>
                        </button>

                        <div
                            x-ref="projectContent{{ $i }}"
                            :style="openIndex === {{ $i }}
                                ? 'max-height: ' + $refs.projectContent{{ $i }}.scrollHeight + 'px'
                                : 'max-height: 0px'"
                            class="overflow-hidden transition-[max-height] duration-500 ease-in-out"
                        >
                            <div class="grid grid-cols-[3fr_2fr] gap-12 pb-14 md:grid-cols-1 md:gap-8 md:pb-10">
                                <div
                                    x-data="projectCarousel(@js($project['images']))"
                                    class="space-y-4"
                                >
                                    <div
                                        class="relative aspect-[16/10] overflow-hidden bg-white/5"
                                        :style="{ backgroundColor: current().bg || 'rgba(255,255,255,0.05)' }"
                                    >
                                        <div
                                            class="flex h-full transition-transform duration-500 ease-in-out"
                                            :style="`transform: translateX(-${active * 100}%);`"
                                        >
                                            <template x-for="(image, index) in images" :key="image.src">
                                                <div
                                                    class="h-full w-full shrink-0"
                                                    :style="{ backgroundColor: image.bg || 'rgba(255,255,255,0.05)' }"
                                                >
                                                    <img
                                                        :src="image.src"
                                                        alt=""
                                                        class="h-full w-full"
                                                        :class="image.contain ? 'object-contain' : 'object-cover'"
                                                    >
                                                </div>
                                            </template>
                                        </div>

                                        <button
                                            type="button"
                                            @click="prev()"
                                            class="absolute left-4 top-1/2 z-30 flex h-10 w-10 -translate-y-1/2 items-center justify-center border border-white/20 bg-black/40 text-white/70 backdrop-blur transition hover:bg-black/70"
                                        >
                                            ←
                                        </button>

                                        <button
                                            type="button"
                                            @click="next()"
                                            class="absolute right-4 top-1/2 z-30 flex h-10 w-10 -translate-y-1/2 items-center justify-center border border-white/20 bg-black/40 text-white/70 backdrop-blur transition hover:bg-black/70"
                                        >
                                            →
                                        </button>

                                        <div class="absolute bottom-3 right-3 z-30 bg-black/45 px-3 py-1 text-xs text-white/80">
                                            <span x-text="active + 1"></span> / <span x-text="images.length"></span>
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-4 gap-1.5 md:grid-cols-4 md:gap-1">
                                        <template x-for="(image, index) in images" :key="index">
                                            <button
                                                type="button"
                                                @click="goTo(index)"
                                                class="relative h-24 overflow-hidden bg-white/5 transition md:h-16"
                                                :class="active === index ? 'opacity-100' : 'opacity-45 hover:opacity-75'"
                                                :style="{ backgroundColor: image.bg || 'rgba(255,255,255,0.05)' }"
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

                                <div class="flex flex-col gap-5">
                                    <div class="hidden text-xs uppercase tracking-[0.15em] text-white/30 md:block">
                                        {{ $project['tag'] }}
                                    </div>

                                    <p class="text-base leading-relaxed text-white/50">
                                        {{ $project['description'] }}
                                    </p>

                                    <div class="space-y-2.5 pt-1">
                                        @foreach($project['details'] as $detail)
                                            <div class="flex items-start gap-3">
                                                <span class="mt-[5px] shrink-0 text-[9px] text-white/20">✦</span>
                                                <p class="text-sm leading-relaxed text-white/40">
                                                    {{ $detail }}
                                                </p>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-neutral-50 px-6 py-14 md:py-14 sm:px-4">
        <div class="mx-auto max-w-6xl">
            <div class="space-y-14 md:space-y-10">
                <h2
                    x-data="revealOnScroll()"
                    :class="shown ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'"
                    class="text-5xl leading-[1.1] tracking-tight text-black transition-all duration-700 ease-out md:text-4xl sm:text-3xl"
                >
                    Последние 10 лет
                </h2>

                <div class="space-y-0">
                    <div
                        x-data="revealOnScroll()"
                        :class="shown ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'"
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
                                @foreach([
                                    'Разработка бренд-платформ, позиционирования и коммуникационных стратегий для компаний из различных отраслей',
                                    'Проведение качественных и количественных исследований рынка, аудитории и конкурентной среды',
                                    'Поиск потребительских инсайтов и определение точек роста брендов',
                                    'Создание концепций брендов, разработка нейминга и архитектуры продуктовых линеек',
                                    'Управление проектами на всех этапах: от исследования и стратегии до внедрения решений',
                                    'Постановка задач дизайнерам и подрядчикам, контроль качества реализации концепций',
                                    'Подготовка и защита стратегических решений перед клиентами',
                                    'Координация работы проектных команд, объединяющих стратегию, креатив и дизайн',
                                ] as $item)
                                    <div class="flex items-start gap-4">
                                        <span class="mt-1.5 shrink-0 text-xs text-black/25">✦</span>
                                        <p class="flex-1 text-base leading-relaxed text-black/65 md:text-base">
                                            {{ $item }}
                                        </p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div
                        x-data="revealOnScroll()"
                        :class="shown ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'"
                        class="group border-t border-black/10 py-10 transition-all duration-700 ease-out md:py-8"
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
                                @foreach([
                                    'Создание и развитие собственного издательского проекта',
                                    'Формирование маркетинговой стратегии и продвижение бренда',
                                    'Управление операционной и финансовой деятельностью компании',
                                    'Организация работы команды и выстраивание бизнес-процессов',
                                ] as $item)
                                    <div class="flex items-start gap-4">
                                        <span class="mt-1.5 shrink-0 text-xs text-black/25">✦</span>
                                        <p class="flex-1 text-base leading-relaxed text-black/65">
                                            {{ $item }}
                                        </p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div
                        x-data="revealOnScroll()"
                        :class="shown ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'"
                        class="group border-t border-black/10 py-10 transition-all duration-700 ease-out md:py-8"
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
                                @foreach([
                                    'Создание и запуск новых брендов компании с нуля',
                                    'Доработка бренд-платформы, выстраивание позиционирования и стратегии развития',
                                    'Анализ рынка, конкурентной среды и потребительского поведения',
                                    'Формирование маркетинговых материалов и коммуникационных решений',
                                    'Управление работой дизайнеров, подрядчиков и рекламных агентств',
                                    'Реализация специальных маркетинговых проектов и партнерских коллабораций',
                                    'Участие в стратегическом развитии брендов компании',
                                ] as $item)
                                    <div class="flex items-start gap-4">
                                        <span class="mt-1.5 shrink-0 text-xs text-black/25">✦</span>
                                        <p class="flex-1 text-base leading-relaxed text-black/65">
                                            {{ $item }}
                                        </p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="border-t border-black/10"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white px-6 py-20 md:py-16 sm:px-4">
        <div class="mx-auto max-w-6xl">
            <div class="space-y-14 md:space-y-10">
                <h2
                    x-data="revealOnScroll()"
                    :class="shown ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'"
                    class="text-5xl leading-[1.1] tracking-tight text-black transition-all duration-700 ease-out md:text-4xl sm:text-3xl"
                >
                    Образование
                </h2>

                <div class="grid grid-cols-2 gap-6 md:grid-cols-1">
                    <div
                        x-data="revealOnScroll()"
                        :class="shown ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'"
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

                    <div
                        x-data="revealOnScroll(150)"
                        :class="shown ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'"
                        class="relative overflow-hidden bg-neutral-50 p-8 transition-all duration-700 ease-out md:p-6"
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

    <section class="bg-neutral-50 px-6 py-20 md:py-16 sm:px-4">
        <div class="mx-auto max-w-6xl">
            <div class="space-y-14 md:space-y-10">
                <div class="grid grid-cols-3 gap-3 md:grid-cols-1">
                    <div
                        x-data="revealOnScroll()"
                        :class="shown ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'"
                        class="aspect-[3/4] overflow-hidden bg-neutral-200 transition-all duration-700 ease-out"
                    >
                        <img
                            src="/fixed/more-1.jpg"
                            alt="Рабочий момент 1"
                            class="h-full w-full object-cover grayscale transition-all duration-700 hover:grayscale-0"
                        >
                    </div>

                    <div
                        x-data="revealOnScroll(150)"
                        :class="shown ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'"
                        class="aspect-[3/4] overflow-hidden bg-neutral-200 transition-all duration-700 ease-out"
                    >
                        <img
                            src="/fixed/more-2.jpg"
                            alt="Рабочий момент 2"
                            class="h-full w-full object-cover grayscale transition-all duration-700 hover:grayscale-0"
                        >
                    </div>

                    <div
                        x-data="revealOnScroll(300)"
                        :class="shown ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'"
                        class="aspect-[3/4] overflow-hidden bg-neutral-200 transition-all duration-700 ease-out"
                    >
                        <img
                            src="/fixed/more-3.png"
                            alt="Рабочий момент 3"
                            class="h-full w-full object-cover grayscale transition-all duration-700 hover:grayscale-0"
                        >
                    </div>
                </div>

                <div
                    x-data="revealOnScroll()"
                    :class="shown ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'"
                    class="max-w-4xl border-l-2 border-black pl-8 transition-all duration-700 ease-out md:pl-5"
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

    <section class="bg-black px-6 py-20 md:py-16 sm:px-4">
        <div class="mx-auto max-w-2xl">
            <div class="space-y-16 md:space-y-12">
                <h2
                    x-data="revealOnScroll()"
                    :class="shown ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'"
                    class="text-7xl leading-[1.05] tracking-tight text-white transition-all duration-700 ease-out md:text-4xl sm:text-3xl"
                >
                    Давайте
                    <br>
                    <span class="text-white/40">поговорим</span>
                </h2>

                <div class="space-y-0">
                    <div
                        x-data="revealOnScroll()"
                        :class="shown ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'"
                        class="group flex items-center justify-between border-t border-white/10 py-7 transition-all duration-700 ease-out md:flex-col md:items-start md:gap-3"
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

                    <div
                        x-data="revealOnScroll()"
                        :class="shown ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'"
                        class="group flex items-center justify-between border-t border-white/10 py-7 transition-all duration-700 ease-out md:flex-col md:items-start md:gap-3"
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

                    <div
                        x-data="revealOnScroll()"
                        :class="shown ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'"
                        class="group flex items-center justify-between border-t border-white/10 py-7 transition-all duration-700 ease-out md:flex-col md:items-start md:gap-3"
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

                <div
                    x-data="revealOnScroll()"
                    :class="shown ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'"
                    class="flex items-center justify-between transition-all duration-700 ease-out md:flex-col md:items-start md:gap-3"
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

    <script>
        function revealOnScroll(delay = 0) {
            return {
                shown: false,
                delay,

                init() {
                    const observer = new IntersectionObserver(
                        ([entry]) => {
                            if (entry.isIntersecting) {
                                setTimeout(() => {
                                    this.shown = true;
                                }, this.delay);

                                observer.unobserve(this.$el);
                            }
                        },
                        {
                            threshold: 0.12,
                            rootMargin: '0px 0px -6% 0px',
                        }
                    );

                    observer.observe(this.$el);
                },
            };
        }

        function projectCarousel(images) {
            return {
                images,
                active: 0,

                current() {
                    return this.images[this.active] || {};
                },

                next() {
                    this.active = this.active === this.images.length - 1
                        ? 0
                        : this.active + 1;
                },

                prev() {
                    this.active = this.active === 0
                        ? this.images.length - 1
                        : this.active - 1;
                },

                goTo(index) {
                    this.active = index;
                },
            };
        }
    </script>

        <script>
            function pagePreloader() {
                return {
                    visible: true,
                    progress: 0,

                    init() {
                        document.body.style.overflow = 'hidden';

                        setTimeout(() => {
                            this.progress = 45;
                        }, 120);

                        setTimeout(() => {
                            this.progress = 80;
                        }, 450);

                        setTimeout(() => {
                            this.progress = 100;
                        }, 850);

                        setTimeout(() => {
                            this.visible = false;
                            document.body.style.overflow = '';
                        }, 1250);
                    },
                };
            }

            function revealOnScroll(delay = 0) {
                return {
                    shown: false,
                    delay,

                    init() {
                        const observer = new IntersectionObserver(
                            ([entry]) => {
                                if (entry.isIntersecting) {
                                    setTimeout(() => {
                                        this.shown = true;
                                    }, this.delay);

                                    observer.unobserve(this.$el);
                                }
                            },
                            {
                                threshold: 0.12,
                                rootMargin: '0px 0px -6% 0px',
                            }
                        );

                        observer.observe(this.$el);
                    },
                };
            }

            function projectCarousel(images) {
                return {
                    images,
                    active: 0,

                    current() {
                        return this.images[this.active] || {};
                    },

                    next() {
                        this.active = this.active === this.images.length - 1
                            ? 0
                            : this.active + 1;
                    },

                    prev() {
                        this.active = this.active === 0
                            ? this.images.length - 1
                            : this.active - 1;
                    },

                    goTo(index) {
                        this.active = index;
                    },
                };
            }
        </script>

</div>
