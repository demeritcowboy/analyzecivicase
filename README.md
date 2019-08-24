# analyzecivicase

Look for potential problems in CiviCase until a proper fix is available. At this time the extension doesn't touch any data, it just tells you what you need to change to avoid problems.

The extension is licensed under [MIT](LICENSE.txt).

## Requirements

* PHP v7.0+ (might work with 5.x but untried)
* CiviCRM 5.0+ (might work with 4.x but untried)

## Installation (Web UI)

This extension has not yet been published for installation via the web UI. (And won't be because it's a temporary helper until a proper fix for the issues is available.)

## Installation (CLI, Zip)

Sysadmins and developers may download the `.zip` file for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
cd <extension-dir>
cv dl https://github.com/demeritcowboy/analyzecivicase/archive/master.zip
```

## Installation (CLI, Git)

Sysadmins and developers may clone the [Git](https://en.wikipedia.org/wiki/Git) repo for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
git clone https://github.com/demeritcowboy/analyzecivicase.git
cv en analyzecivicase
```

## Usage

Go to Administer - Administration Console - System Status and read what it says if anything.

## Known Issues

While it tries, it's unlikely to fully assess any custom code or extensions that might be offering functionality based on a particular relationship type or activity type. For example an extension might restrict certain actions to people in the Case Coordinator role for a case. The changes this extension suggests might break that functionality if, ironically, that custom code is doing the right thing. Although your civicase won't be working anyway to begin with, so...
