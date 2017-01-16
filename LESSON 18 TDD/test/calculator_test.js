'use strict';
let assert = require('assert');
let Calculator = require('../Class/calculator.js');

function createCalculator() {
    return new Calculator();
}

describe('string calculator factorial', function () {
    it('should return 0 if fist param is empty', function(){
        let calculator = createCalculator();

        let factorial = calculator.number('');

        assert.equal(factorial, 0);
    });
    it('should return 1 if first param is 0', function () {
        let calculator = createCalculator();

        let factorial = calculator.number(0);

        assert.equal(factorial, 1);

    })
})