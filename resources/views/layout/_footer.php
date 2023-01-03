<?php

declare(strict_types=1);

use Yiisoft\Html\Html;

?>

<div class="footer">
    <div class="footer_copyright">
        <a href="https://www.yiiframework.com/" target="_blank" rel="noopener">
            © <?= date('Y') ?>  <?= Html::encode($applicationParameters->getName()) ?>
        </a>
    </div>
    <div class="footer_icons">
        <a href="https://github.com/yiisoft" target="_blank" rel="noopener" title="GitHub">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 291.32 291.32">
                <path
                    d="M145.66 0C65.219 0 0 65.219 0 145.66c0 80.45 65.219 145.66 145.66 145.66s145.66-65.21 145.66-145.66C291.319 65.219 226.1 0 145.66 0zm40.802 256.625c-.838-11.398-1.775-25.518-1.83-31.235-.364-4.388-.838-15.549-11.434-22.677 42.068-3.523 62.087-26.774 63.526-57.499 1.202-17.497-5.754-32.883-18.107-45.3.628-13.282-.401-29.023-1.256-35.941-9.486-2.731-31.608 8.949-37.79 13.947-13.037-5.062-44.945-6.837-64.336 0-13.747-9.668-29.396-15.64-37.926-13.974-7.875 17.452-2.813 33.948-1.275 35.914-10.142 9.268-24.289 20.675-20.447 44.572 6.163 35.04 30.816 53.94 70.508 58.564-8.466 1.73-9.896 8.048-10.606 10.788-26.656 10.997-34.275-6.791-37.644-11.425-11.188-13.847-21.23-9.832-21.849-9.614-.601.218-1.056 1.092-.992 1.511.564 2.986 6.655 6.018 6.955 6.263 8.257 6.154 11.316 17.27 13.2 20.438 11.844 19.473 39.374 11.398 39.638 11.562.018 1.702-.191 16.032-.355 27.184C64.245 245.992 27.311 200.2 27.311 145.66c0-65.365 52.984-118.348 118.348-118.348S264.008 80.295 264.008 145.66c0 51.008-32.318 94.332-77.546 110.965z"
                />
            </svg>
        </a>
        <a href="https://join.slack.com/t/yii/shared_invite/enQtMzQ4MDExMDcyNTk2LTc0NDQ2ZTZhNjkzZDgwYjE4YjZlNGQxZjFmZDBjZTU3NjViMDE4ZTMxNDRkZjVlNmM1ZTA1ODVmZGUwY2U3NDA"
           target="_blank"
           rel="noopener"
           title="Slack"
        >
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path
                    d="M6.194 14.644c0 1.16-.943 2.107-2.103 2.107a2.11 2.11 0 0 1-2.104-2.107 2.11 2.11 0 0 1 2.104-2.106h2.103v2.106zm1.061 0c0-1.16.944-2.106 2.104-2.106a2.11 2.11 0 0 1 2.103 2.106v5.274a2.11 2.11 0 0 1-2.103 2.106 2.108 2.108 0 0 1-2.104-2.106v-5.274zm2.104-8.455c-1.16 0-2.104-.948-2.104-2.107s.944-2.106 2.104-2.106a2.11 2.11 0 0 1 2.103 2.106v2.107H9.359zm0 1.06a2.11 2.11 0 0 1 2.103 2.107 2.11 2.11 0 0 1-2.103 2.106H4.092a2.11 2.11 0 0 1-2.104-2.106 2.11 2.11 0 0 1 2.104-2.107h5.267zm8.447 2.107c0-1.16.943-2.107 2.103-2.107a2.11 2.11 0 0 1 2.104 2.107 2.11 2.11 0 0 1-2.104 2.106h-2.103V9.356zm-1.061 0c0 1.16-.944 2.106-2.104 2.106a2.11 2.11 0 0 1-2.103-2.106V4.082a2.11 2.11 0 0 1 2.103-2.106c1.16 0 2.104.946 2.104 2.106v5.274zm-2.104 8.455c1.16 0 2.104.948 2.104 2.107s-.944 2.106-2.104 2.106a2.11 2.11 0 0 1-2.103-2.106v-2.107h2.103zm0-1.06a2.11 2.11 0 0 1-2.103-2.107 2.11 2.11 0 0 1 2.103-2.106h5.268a2.11 2.11 0 0 1 2.104 2.106 2.11 2.11 0 0 1-2.104 2.107h-5.268z"
                />
            </svg>
        </a>
        <a href="https://www.facebook.com/groups/yiitalk" target="_blank" rel="noopener" title="Facebook">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 408.788 408.788">
                <path
                    d="M353.701,0H55.087C24.665,0,0.002,24.662,0.002,55.085v298.616c0,30.423,24.662,55.085,55.085,55.085h147.275l0.251-146.078h-37.951c-4.932,0-8.935-3.988-8.954-8.92l-0.182-47.087c-0.019-4.959,3.996-8.989,8.955-8.989h37.882v-45.498c0-52.8,32.247-81.55,79.348-81.55h38.65c4.945,0,8.955,4.009,8.955,8.955v39.704c0,4.944-4.007,8.952-8.95,8.955l-23.719,0.011c-25.615,0-30.575,12.172-30.575,30.035v39.389h56.285c5.363,0,9.524,4.683,8.892,10.009l-5.581,47.087c-0.534,4.506-4.355,7.901-8.892,7.901h-50.453l-0.251,146.078h87.631c30.422,0,55.084-24.662,55.084-55.084V55.085C408.786,24.662,384.124,0,353.701,0"
                />
            </svg>
        </a>
        <a href="https://twitter.com/yiiframework" target="_blank" rel="noopener" title="Twitter">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.002 512.002">
                <path
                    d="M500.398 94.784c-8.043 3.567-16.313 6.578-24.763 9.023 10.004-11.314 17.631-24.626 22.287-39.193 1.044-3.265-.038-6.839-2.722-8.975-2.681-2.137-6.405-2.393-9.356-.644-17.945 10.643-37.305 18.292-57.605 22.764-20.449-19.981-48.222-31.353-76.934-31.353-60.606 0-109.913 49.306-109.913 109.91 0 4.773.302 9.52.9 14.201-75.206-6.603-145.124-43.568-193.136-102.463-1.711-2.099-4.347-3.231-7.046-3.014-2.7.211-5.127 1.734-6.491 4.075-9.738 16.709-14.886 35.82-14.886 55.265 0 26.484 9.455 51.611 26.158 71.246-5.079-1.759-10.007-3.957-14.711-6.568-2.525-1.406-5.607-1.384-8.116.054-2.51 1.439-4.084 4.084-4.151 6.976-.012.487-.012.974-.012 1.468 0 39.531 21.276 75.122 53.805 94.52-2.795-.279-5.587-.684-8.362-1.214-2.861-.547-5.802.456-7.731 2.638-1.932 2.18-2.572 5.219-1.681 7.994 12.04 37.591 43.039 65.24 80.514 73.67-31.082 19.468-66.626 29.665-103.939 29.665-7.786 0-15.616-.457-23.279-1.364-3.807-.453-7.447 1.795-8.744 5.416-1.297 3.622.078 7.66 3.316 9.736 47.935 30.735 103.361 46.98 160.284 46.98 111.903 0 181.907-52.769 220.926-97.037 48.657-55.199 76.562-128.261 76.562-200.451 0-3.016-.046-6.061-.139-9.097 19.197-14.463 35.724-31.967 49.173-52.085 2.043-3.055 1.822-7.094-.545-9.906-2.361-2.817-6.301-3.727-9.663-2.237z"
                />
            </svg>
        </a>
        <a href="https://t.me/yii3ru" target="_blank" rel="noopener" title="Telegram">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path
                    d="M10 0c5.522847 0 10 4.477152 10 10 0 5.522847-4.477153 10-10 10-5.522848 0-10-4.477153-10-10C0 4.477152 4.477152 0 10 0Zm4.44152 6c-.380967.00676-.965465.207411-3.778372 1.362498-.985186.404555-2.954171 1.241881-5.906955 2.51198-.479486.188247-.730662.372408-.753528.55248-.0439.345722.460248.45335 1.094572.656918.517165.16597 1.212843.360136 1.574497.36785.328055.006997.694202-.126527 1.098441-.400574 2.758878-1.838605 4.183023-2.767925 4.272434-2.78796.063079-.014134.15049-.031906.209715.020065.059226.05197.053403.150393.04713.176797-.050161.21112-2.641806 2.538403-2.790957 2.691345l-.071523.071907c-.54956.542806-1.105014.8972-.146641 1.52071.865332.56298 1.36896.922122 2.260436 1.499054.569705.368694 1.01636.805908 1.604566.75247.270659-.02459.550232-.275851.692217-1.025227.335553-1.771.995126-5.608216 1.147558-7.189441.013355-.138536-.003445-.315834-.016937-.393664-.013492-.07783-.041685-.188721-.144157-.27081-.121356-.097219-.308705-.11772-.392495-.116398Z"
                />
            </svg>
        </a>
    </div>
</div>
