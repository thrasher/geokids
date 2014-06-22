#!/bin/bash

rsync -avz --delete-after public_html geokidso@geokids.org:.

# mirror the site to local directory
# wget -m -k -K -E http://geokids.org
