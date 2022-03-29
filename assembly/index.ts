import { storage, Context } from "near-sdk-as"

// read the discordId hash from account (contract) storage
export function read(): string {
  if (storage.hasKey(`discordId`)) {
    return `✅ Key [ discordId ] has value [ ${storage.getString(`discordId`)!} ]`
  } else {
    return `🚫 Key [ discordId ] not found in storage. ( ${storageReport()} )`
  }
}

// write the hash to discordId
export function write(value: string): string {
  storage.set(`discordId`, value)
  return `✅ Data saved. ( ${storageReport()} )`
}

// private helper method used by read() and write() above
function storageReport(): string {
  return `storage [ ${Context.storageUsage} bytes ]`
}
