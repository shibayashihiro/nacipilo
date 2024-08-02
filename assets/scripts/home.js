
//*‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡/
// Good Burger: Sliders
//*‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡*/

/**
 *
 * Welcome to Good Burger, Sliders
 *
 * Click, drag, release to slide a new burger.
 *
 */
//*‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡/
// utils
//*‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡*/

const BURGER_IMG = document.createElement('img');
BURGER_IMG.src = base_url + "assets/images/IMG_5985.JPG";
let IMAGE_LOADED = false;
BURGER_IMG.addEventListener('load', () => {
    IMAGE_LOADED = true;
});


function getRandomInt(min, max) {
    return Math.random() * (max - min) + min;
}

//*‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡/
// Point
//*‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡*/

class Point {
    constructor(x, y) {
        this.x = x;
        this.y = y;
    }

    get position() {
        return {
            x: this.x,
            y: this.y,
        };
    }

    set position([x, y]) {
        this.x = x;
        this.y = y;
    }

    delta(point) {
        return [this.x - point.x, this.y - point.y];
    }

    distance(point) {
        const dx = point.x - this.x;
        const dy = point.y - this.y;
        return Math.sqrt(dx * dx + dy * dy);
    }

    applyVelocity(velocity) {
        this.x += velocity.vx;
        this.y += velocity.vy;
        return this;
    }

    angleRadians(point) {
        // radians = atan2(deltaY, deltaX)
        const y = point.y - this.y;
        const x = point.x - this.x;
        return Math.atan2(y, x);
    }

    angleDeg(point) {
        // degrees = atan2(deltaY, deltaX) * (180 / PI)
        const y = point.y - this.y;
        const x = point.x - this.x;
        return Math.atan2(y, x) * (180 / Math.PI);
    }
}

//*‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡/
// Velocity
//*‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡*/

class Velocity {
    constructor(vx, vy) {
        this.vx = vx;
        this.vy = vy;
    }

    flip() {
        this.vx *= -1;
        this.vy *= -1;
        return this;
    }

    flipX() {
        this.vx *= -1;
        return this;
    }

    flipY() {
        this.vy *= -1;
        return this;
    }

    multiply(scalar) {
        this.vx *= scalar;
        this.vy *= scalar;
        return this;
    }

    divide(scalar) {
        this.vx /= scalar;
        this.vy /= scalar;
        return this;
    }
}

//*‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡/
// Emoji
//*‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡*/

class Emoji {
    constructor(position, size, text) {
        this.position = position;
        this.size = size;
        this.text = text;
        this.ctx = document.createElement('canvas').getContext('2d');
        this.ctx.canvas.width = 120;
        this.ctx.canvas.height = 120;
        this.transform = 1;

        this.drawCanvas();
    }

    drawCanvas() {
        this.ctx.clearRect(0, 0, this.size, this.size);   
        const gradient = this.ctx.createLinearGradient(
            0,
            0,
            this.size,
            this.size
        );
        gradient.addColorStop(0, '#01527d');        
        gradient.addColorStop(1, '#277ba2');

        this.ctx.fillStyle = gradient;
        this.ctx.shadowColor = "#277ba2";
        this.ctx.shadowOffsetX = 0;
        this.ctx.shadowOffsetY = 0;
        this.ctx.shadowBlur = 10;
        //this.ctx.fillRect(5, 5, 110, 110);  
        this.roundRect(this.ctx, 5, 5, 110, 110, 10);
        //this.ctx.drawImage(this.img, 0, 0, this.size, this.size);
        this.ctx.font = "13px Poppins Regular";
        this.ctx.shadowBlur = 0;
        this.ctx.fillStyle = 'white';
        this.ctx.textAlign = 'center';

        // draw multi line text

        var words = this.text.split(" ");
        var line_text= "";
        var lines = [];
        var max_line_width = 0;
        for (var i = 0; i < words.length; i++) {
            var temp_text = line_text + words[i] + " ";
            var line_width = this.ctx.measureText(temp_text);
            if (line_width.width < 90)
                line_text = temp_text;
            else {                
                lines.push(line_text);
                line_text = '';
                i--;
            }
        }
        if (line_text !== '')
            lines.push(line_text);

        for (var i = 0; i< lines.length; i++)
        {
            line_width = this.ctx.measureText(lines[i]);
            if (line_width.width > max_line_width)
                max_line_width = line_width.width;
        }

        var font_size = 90 / max_line_width * 13;
        this.ctx.font = font_size + "px Poppins Regular";

        var line_height = 90 / max_line_width * 13;
        var line_cnt = lines.length;
        var start_height = 55 - line_height * (line_cnt - 2) / 2;

        for (var i = 0; i < lines.length; i++) {
            this.ctx.fillText(lines[i], 65, start_height + i * line_height);
        }
    }

    roundRect(ctx, x, y, width, height, radius) {
        if (typeof radius === "undefined") {
            radius = 5;
        }
        if (typeof radius === "number") {
            radius = {
                tl: radius,
                tr: radius,
                br: radius,
                bl: radius
            };
        } else {
            var defaultRadius = {
                tl: 0,
                tr: 0,
                br: 0,
                bl: 0
            };
            for (var side in defaultRadius) {
                radius[side] = radius[side] || defaultRadius[side];
            }
        }
        ctx.beginPath();
        ctx.moveTo(x + radius.tl, y);
        ctx.lineTo(x + width - radius.tr, y);
        ctx.quadraticCurveTo(x + width, y, x + width, y + radius.tr);
        ctx.lineTo(x + width, y + height - radius.br);
        ctx.quadraticCurveTo(x + width, y + height, x + width - radius.br, y + height);
        ctx.lineTo(x + radius.bl, y + height);
        ctx.quadraticCurveTo(x, y + height, x, y + height - radius.bl);
        ctx.lineTo(x, y + radius.tl);
        ctx.quadraticCurveTo(x, y, x + radius.tl, y);
        ctx.closePath();
        ctx.fill();
    }

    

    draw = ({ ctx, x, y, size}) => {
        if (size > this.size)
            size = this.size;
        ctx.drawImage(
            this.ctx.canvas,
            x,
            y,
            size,
            size
        );
    };
}

//*‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡/
// Element
//*‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡*/

class Element {
    dpr = window.devicePixelRatio || 1;
    toValue = value => value * this.dpr;
    draw = () => {};
    update = () => {};
}

//*‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡/
// Burger
//*‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡*/

class Burger extends Element {
    constructor({ center, radius, velocity, id, emoji }) {
        super();
        this.emoji = emoji;
        this.center = center;
        this.size = new Point(0, 0);
        this.radius = radius;
        this.velocity = velocity;
        this.mass = this.radius * 2;
        this.friction = 1;
        this.id = id;
    }

    collisionSound() {
        const freq = 120 + Math.random() * 50;
        // sound.play(freq, 0.1, 0.1);
        // sound.play(freq, 0.1, 0.2);
    }

    updateVelocity = (bounds, elements) => {
        // bounds collision
        // horiz
        if (this.center.x + this.radius <= bounds.x) {
            this.center.x = bounds.width;    
            var max_size = bounds.width / 30;
            var min_size = bounds.width / 40;
            console.log('Bound Width :' + bounds.width);
            this.center.y = getRandomInt(max_size, bounds.height - max_size * 2);
            
            this.radius = getRandomInt(min_size, max_size);
            this.emoji.size = this.radius * 2;
            this.size = new Point(0, 0);
            this.velocity = new Velocity(getRandomInt(5, 20) * -1, 0).multiply(0.15);
        }
        
        this.velocity.multiply(this.friction);
    };

    draw = ({ ctx }) => {
        this.emoji.draw({
            ctx,
            x: this.center.x - this.radius,
            y: this.center.y - this.radius,
            size: -this.size.x
        });
    };

    update = ({ elements, bounds }) => {
        this.center.applyVelocity(this.velocity);
        this.size.applyVelocity(this.velocity);
        this.updateVelocity(bounds, elements);
    };
}

//*‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡/
// Sling
//*‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡*/

class Sling extends Element {
    constructor() {
        super();
        this.mouseDown = false;
        this.start = null;
        this.elementId = 0;
        this.interaction = false;
    }

    addBurger({ addElement, mouse, logo }) {
        var hw = this.toValue(window.innerWidth);
        var hh = this.toValue(window.innerHeight);
        
        var imageWidth = BURGER_IMG.width;
        var imageHeight = BURGER_IMG.height;

        hh = hw / imageWidth * imageHeight; 

        const offX = hw / 40;
        const offY = hh / 40;
        const maxSize = hw / 30;
        const minSize = hw / 40;
        const rx = getRandomInt(maxSize * 2, hw - maxSize * 2);
        const ry = getRandomInt(maxSize * 2, hh - maxSize * 4);
        const rr = getRandomInt(minSize, maxSize);

        const start = new Point(rx, ry);
        const radius = this.elementRadius ? this.elementRadius : rr;

        const element = new Burger({
            id: this.elementId,
            center: start,
            radius: radius,
            velocity: new Velocity(getRandomInt(5, 20) * -1, 0).multiply(0.15),
            emoji: new Emoji(
                new Point(start.x - radius, start.y - radius),
                radius * 2,
                logo
            ),
        });

        addElement(element);

        this.element = null;
        this.elementId += 1;

        // const freq = 200 + Math.random() * 50;
        // sound.play(freq, 0.5);
    }

    draw = ({ ctx, mouse, addElement }) => {

        //this.element && this.addBurger({ addElement, mouse });
        
    };

    update = ({ ctx, mouse, addElement, tick }) => {

        if (tick % 10 === 0 && IMAGE_LOADED) {
            var cnt = tick / 10;
            if (cnt < Logos.length) {
                var logo_item = Logos[tick / 10];
                var logo = logo_item.Content;
                
                this.addBurger({ addElement, mouse, logo});
            }
        }
    };
}

//*‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡/
// Background
//*‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡*/

class Background extends Element {
   
    drawGradient(ctx, canvas) {
        // const gradient = ctx.createLinearGradient(
        //     0,
        //     0,
        //     0,
        //     canvas.height
        // );
        // gradient.addColorStop(0, '#fff');
        // gradient.addColorStop(0.5, '#aaa');
        // gradient.addColorStop(1, '#fff');

        // ctx.fillStyle = gradient;
        // ctx.fillRect(0, 0, canvas.width, canvas.height);
        if (IMAGE_LOADED) {
            ctx.drawImage(BURGER_IMG, 0, 0, canvas.width, canvas.height);
            ctx.fillStyle = 'rgba(11, 19, 20, 0.712)';
            ctx.fillRect(0, 0, canvas.width, canvas.height * 2);
        }
    }

    draw = ({ ctx, canvas }) => {
        this.drawGradient(ctx, canvas);      
    };
}

//*‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡/
// Canvas
//*‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡*/

class Canvas {
    constructor(elements = []) {
        // setup a canvas
        this.canvas = document.getElementById('canvas');
        this.dpr = window.devicePixelRatio || 1;
        this.ctx = this.canvas.getContext('2d');
        this.ctx.scale(this.dpr, this.dpr);
        this.tick = 0;
        
        // stuff
        this.elements = elements;
        this.mouse = new Point(window.innerWidth * this.dpr, window.innerHeight * this.dpr);
        this.sling = new Sling();
        // run
        this.setCanvasSize();
        this.setupListeners();
        this.render();
    }    

    setupListeners() {
        window.addEventListener('resize', this.setCanvasSize);
    }


    setCanvasSize = () => {
        console.log('set canvas size');
        var width = window.innerWidth;
        var height = window.innerHeight;
        console.log(width);
        console.log(height);
        var imageWidth = 1200;
        var imageHeight = 625;

        height = width / imageWidth * imageHeight;        

        this.canvas.width = width * this.dpr;
        this.canvas.height = height * this.dpr;
        this.canvas.style.width = width + 'px';
        this.canvas.style.height = height + 'px';
        this.bounds = {
            x: 0,
            y: 0,
            width: width * this.dpr,
            height: height * this.dpr,
        };
    };

    addElement = newElement => {
        this.elements = [...this.elements, newElement];
        return this.elements.length - 1;
    };

    removeElement(deleteIndex) {
        this.elements = this.elements.filter((el, i) => i !== deleteIndex);
        return this.elements;
    }

    update() {
        this.elements.map(({ update }) => update(this));
        this.elements = this.elements.filter(({ dead = false }) => !dead);
        this.sling.draw(this);
    }

    draw() {
        this.elements.map(({ draw }) => draw(this));
        this.sling.update(this);
    }

    render = () => {
        this.draw();
        this.update();
        ++this.tick;
        window.requestAnimationFrame(this.render);
    };
}

$(document).ready(function() {    
    const canvas = new Canvas([new Background()]);
});


