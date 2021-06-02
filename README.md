# FishPig_RemoveMsrp (Magento 2)

Cleanly and automatically removes the Magento_Msrp module from Magento.

## Installation

    composer require fishpig/magento2-remove-msrp && \
    bin/magento module:enable FishPig_RemoveMsrp --keep-generated && \
    bin/magento cache:flush
