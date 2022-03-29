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
This project is meant to be used with a front end website. The website connects
to the Discord API and authenticates the users account.
The project also forces the user to connect to the near wallet they want to
associate to the discord account.
Once both accounts have successfully authenticated. Then the link accounts
process can begin.

The files to setup the front end of the server are located in the www folder.

You can find a working example at 
https://johndoddsjr.com/discordlink/index.html 


# Database
This project stores the discord-name:discordId & near:nearId in a backend
MySQL database. This allows the bot or user to verify assets in the wallet
associated with the users discord account. Without disclosing the users wallet
to the user inquiring.

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
