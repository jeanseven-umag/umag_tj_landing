import { Flex, Grid, Text } from "@mantine/core";
import "./css/TarifStructure.css";

export const TarifStructure = () => {
  const locale = window.currentLang;

  return (
    <Flex direction="column" className="tarif-struct">
      <Flex className="tarif-struct-caption-margin">
        <Text className="tarif-struct-caption">
          Чӣ ба нарх дохил карда шудааст
        </Text>
      </Flex>
      <Grid gutter="md">
        <Grid.Col span={{ xs: 12, sm: 6 }} p={0}>
          <Flex className="tarif-struct-block tarif-struct-block-margin tarif-struct-block-mr">
            <Flex className="tarif-struct-textBlock" direction="column">
              <Text className="tarif-struct-cardCaption">
                Омӯзиши кормандони мағоза
              </Text>
              <Text className="tarif-struct-cardText">
                Мо ба кормандон омӯзиши асосӣ медиҳем, то бо системаи Umag дилпурона кор кунанд.
              </Text>
            </Flex>
            <img
              className="tarif-struct-icon"
              src="/images/tarrifs/learn.svg"
              alt="struct icon"
            />
          </Flex>
        </Grid.Col>
        <Grid.Col span={{ xs: 12, sm: 6 }} p={0}>
          <Flex className="tarif-struct-block tarif-struct-block-margin">
            <Flex className="tarif-struct-textBlock" direction="column">
              <Text className="tarif-struct-cardCaption">
                Машварати телефонӣ
              </Text>
              <Text className="tarif-struct-cardText">
                Мо дар ҳама масъалаҳо дастгирии техникӣ ва машварат медиҳем.
              </Text>
            </Flex>
            <img
              className="tarif-struct-icon"
              src="/images/tarrifs/settings.svg"
              alt="struct icon"
            />
          </Flex>
        </Grid.Col>
        <Grid.Col span={{ xs: 12, sm: 6 }} p={0}>
          <Flex className="tarif-struct-block tarif-struct-block-margin tarif-struct-block-mr">
            <Flex className="tarif-struct-textBlock" direction="column">
              <Text className="tarif-struct-cardCaption">
                Танзими таҷҳизот
              </Text>
              <Text className="tarif-struct-cardText">
                Мо таҷхизотро дар нуқтаи савдо танзим менамоем. Ҳама пайвастҳо ва тафтишҳо - дар ҷояш мешаванд.
              </Text>
            </Flex>
            <img
              className="tarif-struct-icon"
              src="/images/tarrifs/pos.svg"
              alt="struct icon"
            />
          </Flex>
        </Grid.Col>
        <Grid.Col span={{ xs: 12, sm: 6 }} p={0}>
          <Flex className="tarif-struct-block">
            <Flex className="tarif-struct-textBlock" direction="column">
              <Text className="tarif-struct-cardCaption">
                Насби нармафзори зарурӣ
              </Text>
              <Text className="tarif-struct-cardText">
                Мо нармафзорро барои кори устувор насб ва танзим мекунем.
              </Text>
            </Flex>
            <img
              className="tarif-struct-icon"
              src="/images/tarrifs/pc.svg"
              alt="struct icon"
            />
          </Flex>
        </Grid.Col>
      </Grid>
    </Flex>
  );
};
