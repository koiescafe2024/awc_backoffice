const express = require("express");
const Agent = require("../agents");
const router = express.Router();
const jwt = require("jsonwebtoken");

router.get("/", async (req, res) => {
    res.json("success");
});

router.post("/signin", (req, res) => {
    const { username, password } = req.body;
console.log("testt");


    

let payload = {};
payload = {
            user: {
                id: "master",
                username: "master",
                agentid: "master",
                platform: "master",
                percentage: 96,
                parent: "master",
            },
        };

const token = jwt.sign(payload, process.env.BUNDAI_JWT_SECRET, {
        expiresIn: "5 days",
    });

    console.log(token);

    const role = "admin";

    const result = {
            token: token,
            id: "master",
            agentid: "master",
            platform: "master",
            percentage: 97,
            parent: "master",
            username: "master",
            role: "admin",
        };
        res.json({ status: true, result });



    // let payload = {};

    // if (agent) {
    //     payload = {
    //         user: {
    //             id: agent.userid,
    //             username: agent.agentid,
    //             agentid: agent.agentid,
    //             platform: agent.platform,
    //             percentage: agent.percentage,
    //             parent: agent.parent,
    //         },
    //     };
    // }

    // const token = jwt.sign(payload, process.env.BUNDAI_JWT_SECRET, {
    //     expiresIn: "5 days",
    // });

    // const role = "admin";

    // const result = {
    //     token: token,
    //     id: agent.userid,
    //     agentid: agent.agentid,
    //     platform: agent.platform,
    //     percentage: agent.percentage,
    //     parent: agent.parent,
    //     username: username,
    //     role: "admin",
    // };

    // if (agent) res.json({ status: true, result });
    // else res.status(404).json({ status: false, message: "Sign In Failed." });
});

router.post("/signout", async (req, res) => {
    res.json({ status: true, result: { token: "123123123" } });
});

module.exports = router;
