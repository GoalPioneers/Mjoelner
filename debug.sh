#!/bin/usr/bash
valac --pkg gtk+-3.0 ./src/app.vala -o ./bin/app.so

./bin/app.so
