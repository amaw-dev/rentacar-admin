<template>
    <div class="card-compact w-full max-w-md p-2.5 shadow-xl border-2 bg-white">
        <div class="card-body">
            <h2 class="card-title">
                <slot name="title"></slot>
            </h2>
            <slot></slot>
        </div>
    </div>
</template>
