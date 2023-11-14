#!/bin/bash
docker build -t noteziee:latest .
docker tag noteziee:latest suppi147/noteziee:latest
docker push suppi147/noteziee:latest