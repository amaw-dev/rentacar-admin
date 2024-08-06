<template>
    <div class="body">
        <!-- el div padre debe de contar con un display
        flex para que el hijo sea adaptable -->
        <div class="parent-container" style="position: relative">
            <div class="aspect-ratio-box-inner">
                <div class="top-header font-white">
                    <p class="mediana">Código de Reserva</p>
                    <p class="grande">
                        {{ reservation.reserve_code }}
                    </p>
                </div>
                <div class="d-flex-custom gap-custom-1 content-center">
                    <div class="">
                        <img
                            class="img-fluid"
                            width="230"
                            :src="reservation.category_image"
                            alt="carro"
                        />
                    </div>
                    <div>
                        <p class="grande-light">
                            {{ reservation.category_name }}
                        </p>

                        <p class="grande-light">
                            {{ reservation.category_category }}
                        </p>

                        <p class="pequeña-light">
                            {{ reservation.category_description }}
                        </p>
                    </div>
                </div>
                <div
                    class="d-flex-custom space-custom gap-custom-1 content-center"
                    style="padding-left: 10%; padding-right: 10%"
                >
                    <div class="hr-custom"></div>
                    <p class="grande-light font-blue">Recogida:</p>
                    <div class="hr-custom"></div>
                </div>

                <div
                    class="d-flex-custom gap-custom-1"
                    style="margin-top: 1rem; justify-content: center"
                >
                    <div
                        class="d-flex-custom"
                        style="flex-direction: column; gap: 1rem"
                    >
                        <p
                            class="d-custom-inline mediana-light"
                            style="margin-top: 1rem"
                        >
                            Fecha:
                        </p>
                        <p
                            class="d-custom-inline mediana-light top-custom-1rem"
                        >
                            Hora:
                        </p>
                        <p
                            class="d-custom-inline mediana-light top-custom-1rem"
                        >
                            Lugar:
                        </p>
                    </div>
                    <div class="d-flex-custom" style="flex-direction: column">
                        <p class="d-custom-inline grande font-blue">
                            {{ reservation.pickup_date }}
                        </p>
                        <p class="d-custom-inline grande font-blue">
                            {{ reservation.pickup_hour }}
                        </p>
                        <p class="d-custom-inline grande font-blue">
                            {{ reservation.pickup_city }}
                        </p>
                        <p
                            class="d-custom-inline font-blue mediana-light"
                            style="margin-bottom: 2rem"
                        >
                            <strong>
                                {{ reservation.pickup_branch }}
                                <br />
                                Agencia
                                <img
                                    class="img-fluid"
                                    width="100"
                                    :src="localiza_image_url"
                                    alt="logaliza"
                                />
                            </strong>
                        </p>
                    </div>
                </div>
                <div
                    style="
                        display: flex;
                        justify-content: center;
                        gap: 1.5rem;
                        align-items: center;
                    "
                >
                    <div
                        style="
                            position: relative;
                            bottom: -1rem;
                            padding: 0.6rem;
                            background-color: #ffff;
                        "
                    >
                        <!-- para poder generar un QR "unico" lo que hay que hacer es cambiar solo el valor de la data
                                                                                                vvvvvvvvvvv -->
                        <img
                            class="img-fluid"
                            src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=ejemplo"
                            alt="Codigo QR"
                        />
                    </div>
                    <div
                        style="
                            display: flex;
                            flex-direction: column;
                            margin-bottom: 1rem;
                        "
                    >
                        <p class="pequeña" style="width: 100%">
                            Responsable del pago <br />
                            Con Tarjeta de Crédito en Sede:
                        </p>
                        <p class="grande-light">
                            {{ reservation.fullname }} <br />
                            {{ reservation.identification_type }} &nbsp;
                            {{ reservation.identification }}
                        </p>
                    </div>
                </div>

                <div class="buttom-footer"></div>
            </div>
        </div>

        <div class="parent-container-2" style="position: relative">
            <div class="aspect-ratio-box-inner background-blue-custom">
                <div style="padding: 3rem 4rem">
                    <p class="grande">Importante:</p>
                    <p class="grande-light text-justify">
                        Debería presentarse en el lugar de recogida 30 minutos
                        antes o máximo 30 minutos después de la fecha y hora
                        programada.
                    </p>
                    <br />
                    <p class="grande-light text-justify">
                        Lea y verifique toda la información. Realizar cambios a
                        futuro podria afectar los descuentos aplicados a esta
                        reserva e incrementar el costo.
                    </p>
                    <br />
                    <p class="grande">Documentos:</p>
                    <p class="grande-light">
                        1) Tarjeta de crédito física <br />
                        2) Licencia de conducción vigente <br />
                        3) Cédula o pasaporte <br />
                    </p>
                    <p class="mediana-light" style="margin-left: 2rem">
                        Cédula para licencias colombianas <br />
                        pasaporte para licencias extranjeras
                    </p>
                    <div
                        class="d-flex-custom space-custom gap-custom-1 content-center"
                        style="
                            padding-left: 10%;
                            padding-right: 10%;
                            margin-top: 2rem;
                        "
                    >
                        <div class="hr-custom-white"></div>
                        <p class="grande-light">Recogida:</p>
                        <div class="hr-custom-white"></div>
                    </div>

                    <div
                        class="d-flex-custom gap-custom-1"
                        style="margin-top: 1rem; justify-content: center"
                    >
                        <div
                            class="d-flex-custom"
                            style="flex-direction: column; gap: 1rem"
                        >
                            <p class="d-custom-inline mediana-light">Fecha:</p>
                            <p class="d-custom-inline mediana-light">Hora:</p>
                            <p class="d-custom-inline mediana-light">Lugar:</p>
                        </div>
                        <div
                            class="d-flex-custom"
                            style="flex-direction: column"
                        >
                            <p class="d-custom-inline grande">
                                {{ reservation.pickup_date }}
                            </p>
                            <p class="d-custom-inline grande">
                                {{ reservation.pickup_hour }}
                            </p>
                            <p class="d-custom-inline grande">
                                {{ reservation.pickup_city }}
                            </p>
                            <p
                                class="d-custom-inline mediana-light"
                                style="margin-bottom: 2rem"
                            >
                                <strong>{{ reservation.pickup_branch }}</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { onMounted } from "vue";

const props = defineProps({
    reservation: Object,
    localiza_image_url: String,
});

const layout = null;

const qrCode = `https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=${props.reservation.reserve_code}`;

function adjustFontSize() {
    // Configuración para el primer contenedor
    const config1 = [
        { class: ".grande", minFontSize: 16, maxFontSize: 48, divisor: 15 },
        {
            class: ".grande-light",
            minFontSize: 14,
            maxFontSize: 30,
            divisor: 20,
        },
        {
            class: ".mediana",
            minFontSize: 13,
            maxFontSize: 30,
            divisor: 22,
        },
        {
            class: ".mediana-light",
            minFontSize: 13,
            maxFontSize: 26,
            divisor: 23,
        },
        {
            class: ".pequeña",
            minFontSize: 12,
            maxFontSize: 22,
            divisor: 30,
        },
        {
            class: ".pequeña-light",
            minFontSize: 13,
            maxFontSize: 22,
            divisor: 24,
        },
    ];

    // Configuración para el segundo contenedor
    const config2 = [
        { class: ".grande", minFontSize: 18, maxFontSize: 35, divisor: 14 },
        {
            class: ".grande-light",
            minFontSize: 16,
            maxFontSize: 24,
            divisor: 18,
        },
        {
            class: ".mediana",
            minFontSize: 15,
            maxFontSize: 32,
            divisor: 20,
        },
        {
            class: ".mediana-light",
            minFontSize: 13,
            maxFontSize: 24,
            divisor: 22,
        },
        {
            class: ".pequeña",
            minFontSize: 14,
            maxFontSize: 24,
            divisor: 28,
        },
        {
            class: ".pequeña-light",
            minFontSize: 14,
            maxFontSize: 24,
            divisor: 26,
        },
    ];

    adjustContainerFontSize(".parent-container", config1);
    adjustContainerFontSize(".parent-container-2", config2);
}

function adjustContainerFontSize(containerSelector, config) {
    const parent = document.querySelector(containerSelector);
    const parentWidth = parent.clientWidth;

    config.forEach((element) => {
        const items = parent.querySelectorAll(element.class);
        const fontSize = Math.min(
            Math.max(parentWidth / element.divisor, element.minFontSize),
            element.maxFontSize
        );
        items.forEach((item) => {
            item.style.fontSize = `${fontSize}px`;
        });
    });
}

onMounted(() => {
    // Llama a la función al cargar la página y al redimensionar la ventana
    window.addEventListener("resize", adjustFontSize);
    adjustFontSize();
    // document.addEventListener("DOMContentLoaded", adjustFontSize);
});
</script>

<style lang="css">
.body {
    display: flex;
    justify-content: center;
}

.parent-container {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 50%; /* Adjust as needed */
    height: auto;
    background-color: #ffffff; /* Just to visualize the parent container */
}

.aspect-ratio-box-inner {
    width: 100%; /* Width of the child relative to the parent */
    max-width: 720px; /* Max width to constrain the size */
    aspect-ratio: 18 / 22; /* Maintain the 18:25 aspect ratio */
    background-color: #ffffff; /* Just to visualize the box */
}
.parent-container-2 {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 50%; /* Adjust as needed */
    height: auto;
    background-color: #ffffff; /* Just to visualize the parent container */
    color: #ffffff;
}

.top-header {
    background-color: #1266fd;
    padding: 2rem;
    padding-top: 1rem;
    padding-bottom: 0.6rem;
    text-align: center;
}
.buttom-footer {
    background-color: #1266fd;
    content: "";
    padding: 2.2rem;
}
.text-justify {
    text-align: justify;
}

.background-blue-custom {
    background-color: #1266fd;
}

p {
    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    margin: 0;
}

.grande {
    font-weight: 700;
}

.font-white {
    color: #ffff;
}
.font-blue {
    color: #1266fd;
}
.grande-light {
    font-weight: 400;
}
.mediana {
    font-weight: 700;
}
.mediana-light {
    font-weight: 400;
}
.pequeña {
    font-weight: 600;
}
.pequeña-light {
    font-weight: 200;
}

.top-custom-1rem {
    margin-top: 1rem;
}

.img-fluid {
    max-width: 100%;
    height: auto;
}

.d-flex-custom {
    display: flex;
}

.content-center {
    justify-content: center;
    align-items: center;
}
.space-custom {
    justify-content: space-between;
}

.gap-custom-1 {
    gap: 1rem;
}

.hr-custom {
    flex: 1;
    margin: 0 1rem; /* Adds some space between the divs */
    max-width: 100%;
    background-color: #1266fd;
    height: 5px;
}
.hr-custom-white {
    flex: 1;
    margin: 0 1rem; /* Adds some space between the divs */
    max-width: 100%;
    background-color: #ffffff;
    height: 5px;
}

.d-custom-inline {
    display: inline;
}
.flex-column {
    flex-direction: column;
}
</style>
