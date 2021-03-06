<?php

class pzplPHP {
    public function __construct()
    {
        $this->version = "0.1";
    }
    public function pzplUI()
    {
        return "/* pzplUI 1.1 - Licensed under the MIT license */
        :root{--bg-color:white;--bg-text:black;--box-shadow-1:0 2px 3px rgba(50, 50, 50, 0.2);--box-shadow-2:0 3px 4px rgba(40, 40, 40, 0.4);--black:black;--black-hover:#212121;--black-light:#455A64;--white:white;--blue-light:#42A5F5;--blue:#039BE5;--blue-hover:#0288D1;--green-light:#81C784;--green:#43A047;--green-hover:#388E3C;--red-light:#e57373;--red:#e53935;--red-hover:#d32f2f;--orange-light:#FFB74D;--orange:#FB8C00;--orange-hover:#F57C00;--info-blue-light:#4DD0E1;--info-blue:#00ACC1;--info-blue-hover:#0097A7;--alert-text-color:white;--uncolor:#e0e1e2;--uncolor-hover:#cacbcd}body{background-color:var(--bg-color);color:var(--bg-text);line-height:1.5;font-family:'Montserrat', 'Ubuntu', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, \"Helvetica Neue\", Arial, Tahoma, Geneva, Verdana, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\"}a{color:#007bff;text-decoration:none;background-color:transparent}h1,h2,h3,h4,h5,h6{font-weight:500;line-height:1.2}h1{font-size:2.5rem}h2{font-size:2rem}h3{font-size:1.75rem}h4{font-size:1.5rem}h5{font-size:1.25rem}h6{font-size:1rem}.bg-success{background-color:var(--green) !important}.bg-info{background-color:var(--info-blue) !important}.bg-danger{background-color:var(--orange) !important}.bg-error{background-color:var(--red) !important}.bg-normal{background-color:var(--blue) !important}.bg-dark{background-color:var(--black) !important}.text-normal{color:var(--blue) !important}.text-success{color:var(--green) !important}.text-error{color:var(--red) !important}.text-danger{color:var(--orange) !important}.text-dark{color:var(--black) !important}.text-info{color:var(--info-blue) !important}.flexbox{display:flex}.column{display:block;flex-basis:0;flex-grow:1;flex-shrink:1;padding:0.75rem}.flex-10,.flex-20,.flex-25,.flex-30,.flex-35,.flex-40,.flex-45,.flex-50,.flex-60,.flex-65,.flex-75,.flex-80{flex:none}.flex-100{width:100%}.flex-80{width:80%}.flex-75{width:75%}.flex-65{width:65%}.flex-60{width:60%}.flex-50{width:50%}.flex-45{width:45%}.flex-40{width:40%}.flex-35{width:35%}.flex-30{width:30%}.flex-25{width:25%}.flex-20{width:20%}.flex-10{width:10%}.multiline{flex-wrap:wrap}.container{margin:0 auto}.hero{padding:3rem 1.5rem}.subtitle{font-size:1.25rem;font-weight:400;line-height:1.25}.title{font-size:2rem;font-weight:600;line-height:1.125}blockquote,body,dd,dl,dt,fieldset,figure,hr,html,iframe,legend,li,ol,p,pre,textarea,ul{margin:0;padding:0}.consended h1,.consended h2,.consended h3,.consended h4,.consended h5,.consended h6{margin:0;padding:0}.btn{display:inline-block;font-weight:400;line-height:1.5;color:var(--button-text);text-align:center;text-decoration:none;vertical-align:middle;cursor:pointer;user-select:none;background-color:transparent;border:none;padding:0.375rem 0.75rem;font-size:1rem;border-radius:0.25rem;transition:0.3s;box-shadow:var(--box-shadow-1)}.btn:hover{box-shadow:var(--box-shadow-2)}.btn-normal{background-color:var(--blue);color:var(--white)}.btn-normal:hover{background-color:var(--blue-hover)}.btn-success{background-color:var(--green);color:var(--white)}.btn-success:hover{background-color:var(--green-hover)}.btn-error{background-color:var(--red);color:var(--white)}.btn-error:hover{background-color:var(--red-hover)}.btn-danger{background-color:var(--orange);color:var(--white)}.btn-danger:hover{background-color:var(--orange-hover)}.btn-info{background-color:var(--info-blue);color:var(--white)}.btn-info:hover{background-color:var(--info-blue-hover)}.btn-dark{background-color:var(--black);color:var(--white)}.btn-dark:hover{background-color:var(--black-hover)}.btn-uncolor{background-color:var(--uncolor);color:var(--black)}.btn-uncolor:hover{background-color:var(--uncolor-hover)}.alert{padding:0.75rem 1.25rem;border-radius:0.25rem;margin-bottom:1rem}.alert-normal{background-color:var(--blue-light);color:var(--alert-text-color)}.alert-success{background-color:var(--green-light);color:var(--alert-text-color)}.alert-error{background-color:var(--red-light);color:var(--alert-text-color)}.alert-danger{background-color:var(--orange-light);color:var(--alert-text-color)}.alert-info{background-color:var(--info-blue-light);color:var(--alert-text-color)}.alert-dark{background-color:var(--black-light);color:var(--alert-text-color)}.badge{display:inline-block;padding:0.25em 0.4em;font-size:75%;font-weight:700;line-height:1;color:#fff;border-radius:0.25rem}.badge-normal{background-color:var(--blue)}.badge-success{background-color:var(--green)}.badge-error{background-color:var(--red)}.badge-danger{background-color:var(--orange)}.badge-info{background-color:var(--info-blue)}.badge-dark{background-color:var(--black)}.progress-bar{display:flex;flex-direction:column;justify-content:center;overflow:hidden;color:var(--white);text-align:center;white-space:nowrap;background-color:var(--blue);transition:width 0.6s ease}.progress{display:flex;height:1rem;overflow:hidden;line-height:0;font-size:0.75rem;background-color:#e9ecef;border-radius:0.25rem;margin-top:1rem}.spinner-border{display:inline-block;width:2rem;height:2rem;vertical-align:text-bottom;border:0.25em solid currentColor;border-right-color:transparent;border-radius:50%;animation:spinner-border 0.75s linear infinite}@keyframes spinner-border{to{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);white-space:nowrap;border:0}.box{border-radius:5px;box-shadow:0 0.5em 1em -.125em rgba(10, 10, 10, .1), 0 0 0 1px rgba(10, 10, 10, .02);padding:1rem}";
    }
    public function pzplJS()
    {
        return "// pzplJS 1.1.1 - New Generation JavaScript
        // Licensed under the MIT license - by ProgramistaZpolski
        \"use strict\";
        let pzpljs = {};
        function $(selector) {
            return document.querySelector(selector);
        };
        function $$(selector) {
            return document.querySelectorAll(selector);
        };
        pzpljs.info = {
            \"version\": \"1.1.1\",
            \"config\": {
                \"logging\": true,
                \"allowDataLayerUsage\": true
            },
            \"thanks\": \"for using pzplJS\"
        };
        pzpljs.includeHTML = function () {
            let tags = document.getElementsByTagName(\"*\");
            for (let i = 0; i < tags.length; i++) {
                let element = tags[i];
                let htmlFile = element.getAttribute(\"data-pzpljs-html\");
                if (htmlFile) {
                    fetch(htmlFile).then(
                        async function (resp) {
                            if (!resp.ok) {
                                if (this.info.config.logging === true) {
                                    element.innerHTML = \"pzplJS Error: Failed to fetch data\";
                                };
                                console.log(\"pzplJS Error: Failed to fetch data. Traceback: pzpljs.includeHTML();\");
                            } else {
                                element.innerHTML = await resp.text();
                            }
                        }
                    );
                    element.removeAttribute(\"data-pzpljs-html\");
                };
            }
        };
        
        pzpljs.fadeOut = function (fast, target) {
            let fade = setInterval(function () {
                if (!target.style.opacity) {
                    target.style.opacity = 1;
                }
                if (target.style.opacity > 0) {
                    target.style.opacity -= 0.1;
                } else {
                    clearInterval(fade);
                }
            }, fast);
        };
        
        pzpljs.fadeIn = function (fast, target) {
            let fade = setInterval(function () {
                if (!target.style.opacity) {
                    target.style.opacity = 0;
                }
                if (target.style.opacity < 1) {
                    target.style.opacity = parseFloat(target.style.opacity) + 0.1;
                } else {
                    clearInterval(fade);
                }
            }, fast);
        };
        
        pzpljs.dataLayer = {};
        
        pzpljs.useDataLayer = function (dataLayerMode) {
            if (pzpljs.info.allowDataLayerUsage === true) {
                let tags = document.getElementsByTagName(\"*\");
                if (dataLayerMode !== \"html\" && dataLayerMode !== \"text\") {
                    console.log(\"dataLayerMode not specified! Resorting to text mode...\");
                };
                for (let i = 0; i < tags.length; i++) {
                    let dlayer = tags[i].getAttribute(\"data-pzpljs-dlayer\");
                    let supplied_data = tags[i].getAttribute(\"data-pzpljs-sdata\");
                    if (supplied_data) {
                        let converted_data = JSON.parse(supplied_data);
                        this.dataLayer = { ...this.dataLayer, ...converted_data };
                    };
                    if (dlayer) {
                        if (dataLayerMode === \"html\") {
                            tags[i].innerHTML = this.dataLayer[dlayer];
                        } else {
                            tags[i].textContent = this.dataLayer[dlayer];
                        };
                    };
                };
            };
        };
        pzpljs.updateDataLayer = function (newData, dataIndex, mode) {
            if (this.info.config.allowDataLayerUsage === true) {
                this.dataLayer[dataIndex] = newData;
                pzpljs.useDataLayer(mode);
            };
        };
        
        
        pzpljs.dynamicWebsiteElementLoad = function (type, url, target) {
            if (!target && type !== \"html\") {
                target = \"head\";
            };
            if (type == \"css\") {
                document.querySelector(target).innerHTML += `<link rel=\"stylesheet\" href=\"\${url}\">`;
            } else if (type == \"js\") {
                document.querySelector(target).innerHTML += `<script src=\"\${url}\">`;
            } else if (type == \"html\") {
                fetch(url).then(
                    async function (resp) {
                        if (!resp.ok) {
                            if (this.info.config.logging === true) {
                                document.querySelector(target).innerHTML = \"pzplJS Error: Failed to fetch data\" + document.querySelector(target).innerHTML;
                            };
                            console.log(`pzplJS Error: Failed to fetch data. Traceback: pzpljs.dynamicWebsiteElementLoad(\${type}, \${url}, \${target})`);
                        } else {
                            document.querySelector(target).innerHTML = await resp.text();
                        };
                    }
                );
            };
        };
        
        pzpljs.isFunction = function (obj) {
            return typeof obj === \"function\" && typeof obj.nodeType !== \"number\";
        };
        
        pzpljs.attr = function (obj, prop, action, newValue) {
            if (!obj || !prop || !action) {
                console.log(`pzplJS Error: Not all arguments passed! Traceback: pzpljs.attr(\${obj}, \${prop}, \${action})`);
            } else {
                if (action === \"get\" || action === \"GET\") {
                    return obj.getAttribute(prop);
                } else if (action === \"set\" || action === \"SET\") {
                    return obj.setAttribute(prop, newValue);
                } else if (action === \"delete\" || action === \"DELETE\") {
                    return obj.removeAttribute(prop);
                };
            };
        };
        
        pzpljs.css = function (obj, propName, newValue) {
            if (!obj || !propName) {
                console.log(`pzplJS Error: Required parameters not specified! Traceback: pzpljs.css(\${obj}, \${propName})`);
            } else {
                if (newValue) {
                    obj.style[propName] = newValue;
                } else {
                    return obj.style[propName];
                };
            };
        };
        
        pzpljs.empty = function (obj) {
            if (obj.hasChildNodes()) {
                obj.innerHTML = \"\";
            } else {
                obj.remove();
            };
        };
        
        pzpljs.array = {};
        pzpljs.array.noFalse = function (arr) {
            return arr.filter(Boolean);
        };
        
        pzpljs.after = function (elem, target) {
            target.insertAdjacentElement(\"afterend\", elem);
        };
        pzpljs.before = function (elem, target) {
            target.insertAdjacentElement(\"beforebegin\", elem);
        };";
    }
    public function filenameGen($dir, $extension)
    {
        $randGen = rand(0, 9999999);
        while (file_exists($dir . "/" . $randGen . "." . $extension) == true) {
            $randGen = rand(0, 9999999);
        }
        return $dir . $randGen . $extension;
    }
    public function fetch($url)
    {
        return file_get_contents($url);
    }
    public function loadEnv($location)
    {
        include_once $location;
        foreach ($envVariables as $key => $value) {
            putenv("$key=$value");
        }
    }
};