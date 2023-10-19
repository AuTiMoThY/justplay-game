const project = "justplayGame";
const version = "20230808";
const codxfolder = "20231018-justplay-game-github";

const entry = 'src';
const output = 'dist';

const plugins = {
    gsap: 0,
    simplebar: 0,
    swiper: 0,
    flatpickr: 0,
    select2: 0
}

module.exports = {
    project: project,
    codxfolder: codxfolder,
    port: 8081,
    css: `./${output}/assets/css/style.css`,
    entry: `./${entry}`,
    output: `./${output}`,
    basedir: {
        sass: `./${entry}/sass/`
    },
    entryPath: {
        sass: `./${entry}/sass/**/*.scss`,
        js: `./${entry}/script/*.js`
    },
    outputPath: {
        html: `./${output}`,
        sass: `./${output}/assets/css`,
        js: `./${output}/assets/js`
    },
    sassOpt: {
        outputStyle: 'compact',
        includePaths: ['node_modules/']
    },
    sassVar: {
        PROJECT_NAME: project,
        VERSION: version
    },
    njkOpt: {
        VERSION: version,
        IMG_PATH: `./assets/images/`,
        CSS_PATH: `./assets/css/`,
        JS_PATH: `./assets/js/`,
        FAVICON_PATH: `./assets/favicon/`,
        PROJECT_NAME: project,
        PLUGINS: plugins
    },
    jsConfigOpt: {
        VERSION: version,
        PROJECT_NAME: project
    }

}