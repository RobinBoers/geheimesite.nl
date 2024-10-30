import { $ } from "bun";
const SELF = "package.json";

const formatDateTime = (dt, tz) =>
  new Intl.DateTimeFormat("en-US", {
    month: "long",
    day: "numeric",
    year: "numeric",
    timeZone: tz,
  }).format(dt);

const generateBuildInfo = async () => {
  const now = new Date();
  const tz = "CET";

  const buildVersion = (await Bun.file(SELF).json()).version;
  const commitHash = (await $`git rev-parse --short HEAD`.text()).trim();

  return {
    buildVersion,
    commitHash,
    buildDate: {
      timestamp: now.getTime(),
      iso: now.toISOString(),
      human: `${formatDateTime(now, tz)}`,
    },
  };
};

export default generateBuildInfo;
