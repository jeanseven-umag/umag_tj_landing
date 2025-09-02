import "@mantine/core/styles.css";
import { MantineProvider } from "@mantine/core";
import { theme } from "./theme";
import { Tj } from "./Tj";

export default function Tariff() {
  return <MantineProvider theme={theme}><Tj /></MantineProvider>;
}
