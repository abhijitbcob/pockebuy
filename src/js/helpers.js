const TIMOUT_SEC = 15;

const timeout = function (s) {
    return new Promise(function (_, reject) {
        setTimeout(function () {
            reject(new Error(`Request took too long! Timeout after ${s} second`));
        }, s * 1000);
    });
};

export const AJAX = async function (url, uploadData = undefined) {
    try {
        const fetchPro = uploadData ?
            fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(uploadData),
            }) :
            fetch(url);

        const res = await Promise.race([fetchPro, timeout(TIMOUT_SEC)]);
        const data = await res.json();

        if (!res.ok) throw new Error(`${data.message}`);
        return data;
    } catch (err) {
        throw err;
    }
};


/**
 * This function returns item from localstorage
 * @param {string} name 
 * @returns object
 */
export function getLocalStorageItem(name) {
    return localStorage.getItem(name);
}