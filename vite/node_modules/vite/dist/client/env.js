const that = new Function('return this')();
// assign defines
const defines = __DEFINES__;
Object.keys(defines).forEach((key) => {
    const segs = key.split('.');
    let target = that;
    for (let i = 0; i < segs.length; i++) {
        const seg = segs[i];
        if (i === segs.length - 1) {
            target[seg] = defines[key];
        }
        else {
            target = target[seg] || (target[seg] = {});
        }
    }
});
