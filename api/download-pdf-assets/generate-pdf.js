const puppeteer = require("../../protected/node_modules/puppeteer");
const fs = require("fs");
const path = require("path");

// const templatePath = path.join(rootPath, 'invoice_templates/request.html');
// const templateHtml = fs.readFileSync(
//   "download-pdf-assets/template/result.html",
//   "utf8",
// );
async function start() {
  try {
    // Create folder if not exists
    var dir = "./tmp";
    if (!fs.existsSync(dir)) {
      fs.mkdirSync(dir);
    }
    // Get template
    const templateHtml = fs.readFileSync("tmp/result.html", "utf8");

    const browser = await puppeteer.launch({
      args: [
        "--no-sandbox",
        "--font-render-hinting=none",
        "--force-color-profile=srgb",
      ],
      headless: true,
    });

    const page = await browser.newPage();
    await page.setViewport({
      width: 1920,
      height: 1080,
    });
    await page.setUserAgent(
      "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.121 Safari/537.36",
    );

    const pathToTemplate = path.resolve("tmp/result.html");
    await page.goto(`file://${pathToTemplate}`, { waitUntil: "networkidle0" });
    // await page.setContent(templateHtml);

    await page.pdf({
      format: "a4",
      displayHeaderFooter: false,
      margin: {
        top: "15px",
        bottom: "140px",
        left: "10px",
        right: "10px",
      },
      printBackground: true,
      landscape: true,
      path: "tmp/result.pdf", // relative to proccess path (e.g. if called from download-pdf.php path relative to this php file)
    });
    await page.screenshot({
      path: "test.png",
    });
    await page.close();
    await browser.close();

    console.log("success");
  } catch (error) {
    console.log(error);
  }
}
start();
