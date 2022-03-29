# Discord NEAR Asset Verifier
# ===========================
Example implementation of anonymously linking your discord account to your near
wallet. For the purpose of allowing discord channels to verify asset ownership.

[near-contract-standards]: https://github.com/near/near-sdk-rs/tree/master/near-contract-standards

# Prerequisites
# =============
1. INSTALL `NEAR CLI` first like this: `npm i -g near-cli`
2. clone this repo to a local folder
3. Install webserver (apache, node)

# FrontEnd
This example project is used with a front end website. 
The website connects allows the user to authenticate with the Discord and NEAR login API.
Once both accounts have successfully authenticated. The link accounts
process can begin.

The files to setup the front end of the server are located in the www folder.

You can find a working example at 
https://johndoddsjr.com/discordlink/index.html 


# SmartContract 
This project uses both a smart contract and a database to store the information. 

The smart contract writes the users hashed discord id to the discordId key in the authenticated users wallet.

In this example the discord id and near wallet id are also stored in a MySQL database. 

The verify.php offers the start of a possible API verification that could directly intergrate with a discord bot. 

# Database
Use the file in the www/mysql folder to setup your database tables


# Building
1. run `yarn`


# Using this contract
### Getting started
1. run `./scripts/1.dev-deploy.sh`

### Smart Contract
The smart contract is written in AssemblyScript and resides in the assembly dir.
It contains the following functions to read/write a value to the key 'discordId'.

```ts

// read discordId from account (contract) storage
export function read(): string {}

// write the hash to discordId
export function write(value: string): string {}

// private helper method used by read() and write() above
private storageReport(): string {}
```

# Videos
https://www.loom.com/share/a82b309d880549bc8ef6c6b637a550af?sharedAppSource=personal_library
